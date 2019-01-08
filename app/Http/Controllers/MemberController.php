<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class MemberController extends Controller
{
    public function profile (Request $request)
    {
        $access_token = $request->cookie('access_token');
        if(!$access_token){
            return redirect()->route('login.index');
        }

        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/me', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                ],
            ]);
        $data = json_decode($response->getBody()->getContents(), true);

        return view('profile', [
            'data' => $data
        ]);
    }
}
