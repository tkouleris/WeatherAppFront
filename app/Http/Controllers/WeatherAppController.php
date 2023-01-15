<?php

namespace App\Http\Controllers;

use App\Service\WeatherApp;
use Illuminate\Http\Request;

class WeatherAppController extends Controller
{
    public function authenticate(WeatherApp $weatherApp)
    {
        return $weatherApp->authentication();
    }

    public function cities(Request $request, WeatherApp $weatherApp)
    {
        $token = $request->input('app_token');
        return $weatherApp->cities($token);
    }

    public function forecast($city_id, Request $request, WeatherApp $weatherApp)
    {
        $token = $request->input('app_token');
        return $weatherApp->forecast($token, $city_id);
    }
}
