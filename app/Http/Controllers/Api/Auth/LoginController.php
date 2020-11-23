<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $http = new \GuzzleHttp\Client;

        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 3,
            'is_login' => '0',
            'is_active' => '1',
            'is_verified' => '1'
        ];

        $check = DB::table('users')->where('email', $request->email)->first();

        if ($check->is_verified == '1') {
            if ($check->is_active == '1') {
                if ($check->is_login == '0') {
                    if (Auth::attempt($user)) {
                        $this->isLogin(Auth::id());
                        $response = $http->post('http://guestbook.test/oauth/token', [
                            'form_params' => [
                                'grant_type' => 'password',
                                'client_id' => $this->client->id,
                                'client_secret' => $this->client->secret,
                                'username' => $request->email,
                                'password' => $request->password,
                                'scope' => '*',
                            ]
                        ]);
                        return json_decode((string) $response->getBody(), true);
                    } else {
                        return response([
                            'message' => 'Login Failed'
                        ]);
                    }
                } else {
                    return response([
                        'message' => 'Account is already logged in.'
                    ]);
                }
            } else {
                return response([
                    'message' => 'Account Suspended.'
                ]);
            }
        }else {
            return response([
                'message' => 'Please verify your e-mail address.'
            ]);
        }
    }

    private function isLogin(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1',
        ]);
    }
}
