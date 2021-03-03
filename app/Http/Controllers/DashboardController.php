<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Membresia;
class DashboardController extends Controller
{
    public function index()
    {  
        $membresia     =     Membresia::where('id_empleado','=',Auth::user()->id)->first();
    	return view('dashboard.index',['membresia' => $membresia]);
    }




}
