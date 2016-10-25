<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BladeController extends Controller
{
    public function app ()
    {
    	return view ('blade/app');

    }

public function Child ()
   
    {
        return view ('blade/child');

    }


}
