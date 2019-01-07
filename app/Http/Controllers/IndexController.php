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

    private function getTrack($request)
    {
        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $request->cookie('access_token'),
            ],
            'query' => [
                'q' => $request->get('search'),
                'type' => 'track',
                'territory' => 'TW',
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function search(Request $request)
    {
        $track = $this->getTrack($request);

        dd($track);
        return view('search');
    }
}
