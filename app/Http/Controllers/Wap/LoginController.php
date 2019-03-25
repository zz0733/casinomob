<?php

namespace App\Http\Controllers\Wap;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Traits\ValidationTrait;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers,ValidationTrait;

//    protected $redirectTo = '/m';
//    protected $username;

    public function showLoginForm()
    {
        return view('wap.login');
    }

    public function postLogin(Request $request)
    {
        $validator = $this->verify($request, 'player.login');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $player = Player::where('username', $request->username)->first();
        if ($player)
        {
            if ($player->status == 1)
                return fail('player locked');
        }

        if (Auth::guard('player')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            $player = auth('player')->user();
            $player->last_session = Session::getId();
            $player->save();
            return redirect()->route('wap.index');
        }else{
            return fail('unauthorized');
        }

    }

    public function logout()
    {
        Auth::guard('player')->logout();
        return redirect()->route('wap.index');
    }
}
