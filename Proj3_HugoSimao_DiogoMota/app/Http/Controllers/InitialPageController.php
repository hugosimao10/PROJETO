<?php

namespace App\Http\Controllers;
use App\Models\User;

class InitialPageController extends Controller
{
    public function initalPageView()
    {

        return view('initialPage');
    
    }

}

?>
