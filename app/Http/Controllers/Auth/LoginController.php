<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Auth;
use Socialite;
use App\User;
use Validator;


use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //for redirect fb/gmail login
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

   //handle callback
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::with($provider)->User();
        } catch (Exception $e) {
            return redirect('/social/login/facebook');
        }
 
        $authUser = $this->findOrCreateUser($user,$provider); //cek have any or not?
 
        Auth::login($authUser, true); //cek by fitur auth laravel

        return redirect()->route('home');

    }

    private function findOrCreateUser($provideruser,$providername)
    {
        $authUser = User::where('email', $provideruser->getEmail())->first();
 
        if ($authUser){
            return $authUser;
        } //cek, if true in below not execute
 
        return User::create([
            'name' => $provideruser->name,
            'level' => 'member',
            'email' => $provideruser->getEmail(),
            'social_id' => $provideruser->getId(),
            'social_provider' => $providername,
            'avatar' => $provideruser->getAvatar()
        ]);
    }
}
