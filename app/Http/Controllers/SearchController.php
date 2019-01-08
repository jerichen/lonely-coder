<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        
        return view('search');
    }
}
