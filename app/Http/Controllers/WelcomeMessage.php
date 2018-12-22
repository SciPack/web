<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeMessage extends Controller
{
    public static function nextFeatureIn()
    {
        $expected = Carbon::parse('2019-01-01 00:00:00');
        return $expected->diffInSeconds(Carbon::now());
    }
}
