<?php

namespace Klsandbox\KeepaliveRoute\Http\Controllers;

use App\Http\Controllers\Controller;

class KeepaliveController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('keepalive-route::keepalive');
    }

}
