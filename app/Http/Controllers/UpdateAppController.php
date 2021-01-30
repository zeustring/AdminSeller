<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zipper;
class UpdateAppController extends Controller
{	
	public function sources()
	{
		return view('updateApp.sources');
	}
    public function subirZip(Request $request)
    {  
       $path       =   $request->file('file');
      

	  Zipper::make($path)->extractTo('../', array('vendor'));
	  return redirect('dashboard');

    }
}
