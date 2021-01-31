<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Web parallax',
			'description' => 'Web parallax'
		];

		return view('webparallax', $data);
	}

	//--------------------------------------------------------------------

	public function development()
	{
		$data = [
			'title' => 'Web parallax',
			'description' => 'Web parallax'
		];

		return view('home', $data);
	}
}
