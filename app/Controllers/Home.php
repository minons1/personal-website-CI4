<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function profile()
	{
		return view('profile');
	}

	public function hometown()
	{
		return view('hometown');
	}

	public function food()
	{
		return view('food');
	}

	public function tourist()
	{
		return view('tourist');
	}
}
