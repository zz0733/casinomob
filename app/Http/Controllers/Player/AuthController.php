<?php

namespace App\Http\Controllers\Player;

use Session;
use Exception;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers,ValidationTrait;

    public function login(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('player.auth.login');
        }
        else{
            try{
                $validator = $this->verify($request, 'player.login');
                if ($validator->fails())
                    return responseWrong($validator->messages()->toArray());

                $player = Player::whereUsername($request->username)->first();

                if($player->status == 1)
                {
                    return fail('player locked');
                }

                if(Auth::guard('player')->attempt(['username' => $request->username, 'password' => $request->password]))
                {
                    $player = auth('player')->user();
                    $player->last_session = Session::getId();
                    $player->save();
                    return redirect()->route('wap.index');
                }
                else
                    return fail('unauthorized');
            }catch(Exception $ex)
            {
                dd($ex->getMessage().'  '.$ex->getLine().' '.$ex->getFile());
            }

        }
    }

    public function register(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('player.auth.register');
        }
        else{
            try{
                $validator = $this->verify($request, 'player.register');

                if ($validator->fails())
                    return fail('validation fail',$validator->messages()->toArray());
                $data = $request->only('username','password','email','withdraw_pwd');
                $data['realPassword'] = $data['password'];
                $data['password'] = bcrypt($data['password']);
                $data['withdraw_pwd'] = bcrypt($data['withdraw_pwd']);
                Player::create($data);
                return success($data,'Player registered successfully');
            }catch(Exception $ex)
            {
                dd($ex->getMessage().'  '.$ex->getLine().' '.$ex->getFile());
            }
        }
    }
}
