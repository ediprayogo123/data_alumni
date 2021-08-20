<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('peges/home');
	}
	public function table(){
		return view("peges/table");
	}

	//--------------------------------------------------------------------

}
