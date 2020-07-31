<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;

class WebController extends Controller
{
    
	public function creditCardDesign()
    {
    	// $template = Template::first();
         return view('creditCardDesign',compact('template'));
    }

}
