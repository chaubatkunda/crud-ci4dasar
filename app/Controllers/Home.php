<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'Home',
			'conten'	=> 'welcome_message'
		];
		return view('_layout/wraper', $data);
	}

	//--------------------------------------------------------------------

}
