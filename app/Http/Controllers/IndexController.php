<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
