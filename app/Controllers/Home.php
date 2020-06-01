<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->testimonial = new AdminModel();
	}
	public function index()
	{
		$data = [
			'title'		=> 'Home',
			'testimonial'   =>  $this->testimonial->getTestimonial()
		];
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
