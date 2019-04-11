<?php

namespace App\Http\Controllers\Wap;

use Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Activity;
use App\Models\SystemNotice;
use App\Http\Controllers\Api\ApiController;


class IndexController extends Controller
{
    public function index()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $banners = Banner::where('type', 2)->get();
        return view('wap.index', compact('system_notices', 'banners'));
    }

    public function gameList()
    {
        return view('wap.layouts.list_main');
    }

    public function nav()
    {
        $player_providers = $this->getUserProviders();
        return view('wap.nav',compact('player_providers'));
    }

    public function getUserProviders()
    {
        $userProviders = array();
        $providers = Provider::where('on_line', '0')->get(['id', 'api_name']);
        foreach ($providers as $provider) {
            array_push($userProviders, ['id' => $provider->id,'name' => $provider->api_name, 'active' => Auth::user()->hasProvider($provider->api_name) ? 'yes' : 'no']);
        }
        return $userProviders;
    }

    public function activity_list()
    {
        $data = Activity::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        return view('wap.activity_list', compact('data'));
    }

    public function activity_detail($id)
    {
        $data = Activity::findOrFail($id);

        return view('wap.activity_detail', compact('data'));
    }

    public function playGame(Request $request)
    {
        $provider = $request->provider;
        if (!Auth::user()->hasProvider($provider)) {
            return response()->json(['status' => 'fail', 'message' => '平台未激活']);
        }
        if ($provider = Provider::where('api_name', $provider)->first()) {
            $app = new ApiController($provider);
            $response = $app->gameOpen(Auth::user());


            if($request->provider == '3K')
            {
                \Log::info($response->url);
                $url = parse_url($response->url,PHP_URL_FRAGMENT);
                \Log::info($url);
                return 'http://159.89.167.78:8989#'.$url;

            }
            else
                return $response->url;
        }
        else{
            return response()->json(['status' => 'failed', 'message' => '打开游戏失败']);
        }
    }

    public function activateProvider(Request $request)
    {
        $provider = $request->provider;
        if (Auth::user()->hasProvider($provider)) {
            return response()->json(['status' => 'success', 'message' => '已经激活']);
        }
        if ($provider = Provider::where('api_name', $provider)->first()) {
            $app = new ApiController($provider);
            $response = $app->activate(Auth::user());
            \Log::info('activateProvider: '.json_encode($response));
            if ($response == 'success' || $response == 'duplicate') {
                Auth::user()->attachProvider($provider, Auth::user()->password, 0);
                return response()->json(['status' => 'success', 'message' => '激活成功']);
            }
            else
                return response()->json(['status' => 'failed', 'message' => '激活失败'],500);
        }
        return response()->json(['status' => 'failed', 'message' => '激活失败']);
    }

    public function balance(Request $request)
    {
        $provider = $request->provider;
        Log::info($provider);
        $app = new ApiController($provider);
        try{
            $response = $app->balance(Auth::user());
        }catch (\Exception $ex) {
            Log::info($ex->getMessage().'  '.$ex->getLine().' '.$ex->getFile());
            return response()->json(['status' => 'failed', 'message' => '查询失败，请稍后再试'],500);
        }
        return response()->json(['status' => 'success', 'balance' => $response]);
    }
}
