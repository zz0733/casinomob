<?php

namespace App\Http\Controllers\Wap;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Traits\ValidationTrait;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RegisterController extends Controller
{
	use ValidationTrait;

    protected $redirectTo = '/';
	
	public function register(Request $request)
    {
        \Log::info($request->all());
            try{
                $validator = $this->verify($request, 'player.register');

                if ($validator->fails())
                    return fail('validation fail',$validator->messages()->toArray());
                $data = $request->only('username','password','email','withdraw_pwd');
                $data['realPassword'] = $data['password'];
                $data['password'] = bcrypt($data['password']);
                $data['withdraw_pwd'] = bcrypt($data['withdraw_pwd']);
                Player::create($data);
            }catch(Exception $ex)
            {
                dd($ex->getMessage().'  '.$ex->getLine().' '.$ex->getFile());
            }
        
        return redirect()->route('wap.index');
    }

    public function showRegisterForm()
    {
        return view('wap.register');
    }
}