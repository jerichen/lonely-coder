<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cookie;

class OauthController extends Controller
{
    public function oauth (Request $request)
    {
        $url = env('KKBOX_OAUTH_BASE_URL') . '?redirect_uri=' .
            urlencode(env('KKBOX_OAUTH_REDIRECT_URL')) . '&client_id=' .
            urlencode(env('KKBOX_CLIENT_ID')) . '&response_type=code&state=0001';
        return redirect($url);
    }

    public function oauthCallback(Request $request)
    {
        $code = $request->get('code');

        $client = new Client();
        $response = $client->request('POST', env('KKBOX_ACCESS_TOKEN_URL'), [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'client_id' => env('KKBOX_CLIENT_ID'),
                'client_secret' => env('KKBOX_CLIENT_SECRET'),
            ]
        ]);
        $response_array = json_decode($response->getBody()->getContents(), true);

        Cookie::queue('user_token', $response_array['access_token']);
        return redirect()->secure(route('featured'));
    }

}
