<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;

class AuthController extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $result = $this->tokenValidasi($user->token);
        
        if (!$result) { return redirect('/login');}

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/login');
    }

    public function findOrCreateUser($user, $provider)
    {
        if ($data = User::where('email',$user->email)->first()) {
            return $data;
        }

        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        else{
            $now = Carbon::now();
            $data = User::create([
                'name'     => $user->name,
                'email'    => !empty($user->email)? $user->email : '' ,
                'role' => 'user',
                'password'=> '',
                'email_verified_at' => $now,
                'provider' => $provider,
                'provider_id' => $user->id,
                'token' => str_random(40)
            ]);
            return $data;
        }
    }

    public function tokenValidasi($accessToken)
    {
       try {

       $url = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token='.$accessToken;
       $client = new \GuzzleHttp\Client();
       $response = $client->request('GET',$url)->getBody();

       $data = json_decode($response);
       // dd($data);
        if ($data->issued_to) {
            return true;
           }

       } catch (Exception $e) {

        if ($e->getRespose()->getStatusCode() == '400') {
            echo "token_mismatch";die();
        }

       }
    }
}
