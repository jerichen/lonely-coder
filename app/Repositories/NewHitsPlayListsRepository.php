<?php

namespace App\Repositories;

use App\Repositories\OAuthRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class NewHitsPlayListsRepository
{
    public function __construct()
    {
        $this->oauth_repository = new OAuthRepository;
    }

    public function getNewHitsPlayLists()
    {
        $access_token = $this->oauth_repository->getAccessToken();
        $new_hits_play_lists_response = $this->postNewHitsPlayLists($access_token);
        $new_hits_play_lists = $this->decodeNewHitsPlayListsFromResponse($new_hits_play_lists_response);
        
        return $new_hits_play_lists;
       
    }

    public function postNewHitsPlayLists($access_token)
    {
        if (empty($access_token)) {
            throw new Exception('empty access token');
        }

        $client = new Client();

        $url = 'https://api.kkbox.com/v1.1/new-hits-playlists';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
            ],
            'query' => [
                'territory' => 'TW',
            ],
        ]);

        return $response;
    }

    public function decodeNewHitsPlayListsFromResponse(Response $response)
    {
        $new_hits_play_lists = [];

        $status_code = $response->getStatusCode();

        if ($status_code != 200) {
            return $new_hits_play_lists;
        }

        $request_body = json_decode($response->getBody()->getContents(), true);

        

        if (!array_key_exists('data', $request_body)) {
            return $access_token;
        }

        $new_hits_play_lists = $request_body['data'];

        return $new_hits_play_lists;

    }
}
