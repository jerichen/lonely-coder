<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/me', [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
            ],
        ]);
        $data = json_decode($response->getBody()->getContents(), true);
        $data['access_token'] = $access_token;

        return view('search');
    }
}
