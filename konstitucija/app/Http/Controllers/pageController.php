<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function hello()
	{
			return view('welcome');
	}
}
