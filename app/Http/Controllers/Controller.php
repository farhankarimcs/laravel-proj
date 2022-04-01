<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
public function index(){
        return view('welcome');
}

public function contact_us(){
    return view('contact');
}

public function about_us(){
    return "<h1>About Us</h1>";
}

public function services(){
    return "<h1>Services</h1>";

}

}
