<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function index(){
    	return 
    	["Nis" => "3103118119",
    	"Name"=> "Safina Nanda Kinanthi Asrie",
    	"Gender"=>"Perempuan",
    	"Phone"=>"088983129690",
    	"Class"=>"XII RPL 4"];
    }
}
