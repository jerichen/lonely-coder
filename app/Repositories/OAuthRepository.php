<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class OAuthRepository
{
    public function postAccessToken()
    {

        $client = new Client();

        $url = env('KKBOX_ACCESS_TOKEN_URL');

        $headers = ['Content-Type' => 'application/x-www-form-urlencoded',
            'Host' => 'account.kkbox.com'];

        $response = $client->request('POST', 'https://account.kkbox.com/oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => 'c1353fd48a0ebc1c113ed055fa66f87d',
                'client_secret' => '666967da8bf8aa6607695528924f212c',
            ],
        ]);

        return $response;
    }

    public function decodeAccessTokenFromResponse(Response $response)
    {
        $access_token = '';

        $status_code = $response->getStatusCode();

        if ($status_code != 200) {
            return $access_token;
        }

        $request_body = json_decode($response->getBody()->getContents(), true);

        if (!array_key_exists('access_token', $request_body)) {
            return $access_token;
        }

        $access_token = $request_body['access_token'];

        return $access_token;

    }

    public function getAccessToken()
    {
        $response = $this->postAccessToken();
        $access_token = $this->decodeAccessTokenFromResponse($response);

        return $access_token;
    }
}
