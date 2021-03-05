<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$page)
    {
        switch($page){
            case "board":
                return view('backoffice.board');
            break;
            case "offres":
                return view('backoffice.offre');
            break;
            case "users":
                return view('backoffice.user');
            break;
            case "newletter":

            break;
            case "packs":

            break;
            case "pubs":

            break;
        }
    }
}
