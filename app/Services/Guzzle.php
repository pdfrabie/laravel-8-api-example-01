<?php

namespace App\Services;

class Guzzle
{
    public function __construct(private \GuzzleHttp\Client $client){}

    public function get($url) {
        return json_decode(
            $this->client->request(
                'GET',
                $url,
                ['verify' => false]
            )->getBody()
        );
    }
}