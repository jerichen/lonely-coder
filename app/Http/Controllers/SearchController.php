<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\NewHitsPlayListsRepository;
use Illuminate\Http\Request;
use App\Repositories\OAuthRepository;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    protected $access_token;
    protected $oauth_repo;

    public function __construct()
    {
        $this->oauth_repo = new OAuthRepository();
        $this->access_token = $this->oauth_repo->getAccessToken();
    }

    private function getUserProfile($request)
    {
        $user_token = $request->cookie('user_token');
        if(!$user_token){
            return null;
        }

        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/me', [
            'headers' => [
                'Authorization' => 'Bearer ' . $user_token,
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    private function getFeaturedPlaylists()
    {
        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/featured-playlists', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->access_token,
            ],
            'query' => [
                'territory' => 'TW',
                'limit' => 5,
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    private function getCharts()
    {
        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/charts', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->access_token,
            ],
            'query' => [
                'territory' => 'TW',
            ],
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    private function getSearchAlbum($search)
    {
        $client = new Client();
        $response = $client->request('GET', env('KKBOX_API_URL') . '/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->access_token,
            ],
            'query' => [
                'q' => $search,
                'type' => 'album',
                'territory' => 'TW',
                'limit' => 5
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function featured(Request $request, NewHitsPlayListsRepository $new_hits_play_lists_repository)
    {
        $user = $this->getUserProfile($request);
        if(!$user){
            return redirect()->route('login.index');
        }

        $new_hits_play_lists = $new_hits_play_lists_repository->getNewHitsPlayLists();
        $featured_playlists = $this->getFeaturedPlaylists();
        $charts = $this->getCharts();

        return view('featured', [
            'user' => $user,
            'new_hits_play_lists' => $new_hits_play_lists,
            'featured_playlists' => $featured_playlists,
            'charts' => $charts
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $albums = $this->getSearchAlbum($search);
//        dd($albums['albums']['data']);

        return view('search', [
            'albums' => $albums['albums'],
        ]);
    }
}
