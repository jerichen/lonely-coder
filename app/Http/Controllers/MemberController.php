<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function getProfile (Request $request) {
        $access_token = $request->token;
        return $access_token;
    }
}
