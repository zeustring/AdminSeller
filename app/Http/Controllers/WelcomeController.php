<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{

	public function __construct()
    {
    	 $this->middleware('welcome');
    }

    public function login()
    {
    	$user    =    Empleado::where('id_jerarquia','=','3')->first();
    	return view('login',['user'=>$user]);
    }
}
