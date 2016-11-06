<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
	
	public function getIndex()
	{

		# Process variable daa or params
		# talk to models
		# compile process,data from models.
		# pass the data to the correct view...
		
		return view('Pages/welcome');
	}

	public function getAbout(){
		return view('Pages/about');

	}

	public function getContact(){
		return view('Pages/contact');
	}
	
}