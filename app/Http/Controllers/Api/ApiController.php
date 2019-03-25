<?php

namespace App\Http\Controllers\Api;

use Log;
use Exception;
use App\Models\Player;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected $provider;

    public function __construct($provider)
    {
        $this->provider = $provider;
    }

    private static function httpRequest($method, $params, $action, $token = '', $function = '')
    {
        $client = new Client();
        try {
            $response = $client->request(
                $method,
                env('GM2_URL') . $action,
                ['auth' => [env('GM2_USER'), env('GM2_PASSWORD')], 'json' => $params, 'http_errors' => true]
            );
            return json_decode($response->getBody());
        } catch (ClientException $ex) {
            if ($response = $ex->getResponse()->getBody()) {
                $response = json_decode($response);
                $response->status = 'failed';
                return $response;
            }
        } catch(Exception $ex){
            Log::info($ex->getMessage());
            throw new Exception($ex->getMessage());
        }
    }


    public function activate(Player $player)
    {
        $params['username'] = $player->username;
        $params['password'] = $player->realPassword;
        Log::info(1);
        if($player->hasCreated == 0)
        {
            if($response = self::httpRequest('POST',$params,'register')) {
                if ($response->player_name == $player->username) {
                    $player->hasCreated = true;
                    $player->save();
                } else {
                    return 'failed';
                }
            }else{
                return 'failed';
            }
        }
        Log::info(2);
        if ($response = self::httpRequest('POST', $params, $this->provider->api_title . '/player/active', '')) {
            if ($response->status == 'success') {
                return 'success';
            }
            if ($response->status == 'failed' && $response->error == 21) {
                return 'duplicate';
            }
        }
        Log::info(3);
        return 'failed';
    }

    public function balance(Player $player)
    {
        Log::info($this->provider);
        $params['username'] = $player->username;
        $response = self::httpRequest('POST', $params, $this->provider . '/player/balance', '');
        Log::info(json_encode($response));
        return $response->balance;
    }

    public function deposit($username,$amount,$provider)
    {

    }

    public function withdraw($username,$amount,$provider)
    {

    }

    public function gameOpen(Player $player,$gameId='1',$mobile='yes',$lang='zh-cn')
    {
        $params['username'] = $player->username;
        $params['game_code'] = $gameId;
        $params['mobile'] = $mobile;
        if ($this->provider == 'NT' || $this->provider == 'GameArt' || $this->provider == 'GM') {
            $params['lang'] = $lang;
        }
        $response = self::httpRequest('POST', $params, $this->provider->api_title . '/game/open', '');
        \Log::info('gameOpen: '.json_encode($response));
        return $response;
    }
}
