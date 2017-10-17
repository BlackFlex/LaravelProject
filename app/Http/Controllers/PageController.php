<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller {


	/**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function about()
    {
        return view('banana', ['garnik' => 'Grno', 'say_hello' => 'Hi']);
    }

}