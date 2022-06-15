<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('page/index');
    }

    public function users()
	{	
		return view('page/users');
	}

	public function berkas_mahasiswa()
	{	
		
		return view('page/berkas_mahasiswa');
	}

	public function metode_saw()
	{	
		
		return view('page/metode_saw');
	}

	public function metode_pm()
	{	
		
		return view('page/metode_pm');
	}
}
