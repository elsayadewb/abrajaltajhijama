<?php

namespace App\Http\Controllers\Auth;

use App\Socialprovider;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Auth;







class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'photo'         =>'sometimes|nullable|'.v_image(),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'photo'         =>$data['photo'],

        ]);
    }









    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

        } catch (\Exception $e) {
            return redirect('/');
        }
        //Check if we have   logged  provider
        $socialProvider = Socialprovider::where('provider_id', $socialUser->getId())->first();
        if (!$socialProvider) {
            //creat a new   user provider
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                ['name' => $socialUser->getName()]
            );
            Socialprovider::create(
                ['user_id' => $user->id, 'provider_id' => $socialUser->getId(), 'provider' => $provider]
            );

            auth()->login($user);
        }else{
            auth()->login($socialProvider->user);

        }
        return redirect()->to('/home');


    }

}
