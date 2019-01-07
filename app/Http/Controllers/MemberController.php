<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class MemberController extends Controller
{
    public function getProfile (Request $request)
    {
        $access_token = $request->token;

        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/me', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                ],
            ]);
        $data = json_decode($response->getBody()->getContents(), true);
        $data['access_token'] = $access_token;

        return view('profile', [
            'data' => $data
        ]);
    }
}
