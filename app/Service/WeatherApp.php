<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class WeatherApp
{
    private $httpClient;
    private $base_url = 'https://weatherapi.tkouleris.eu/weather/';


    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    public function authentication()
    {
        $url = $this->base_url.'authenticate';
        $data = ["username"=>"demo", "password"=>"RedGreenBlue" ];
        return $this->httpClient->post($url, $data);
    }

    public function cities($token)
    {
        $url = $this->base_url.'city/GR';
        return $this->httpClient->get($url, $token);
    }

    public function forecast($token, $city_id)
    {
        $url = $this->base_url.'forecast/'.$city_id;
        return $this->httpClient->get($url, $token);
    }


}
