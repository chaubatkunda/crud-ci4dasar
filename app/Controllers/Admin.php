<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Testimonial',
            'conten'    => 'admin/testimonial/index'
        ];
        return view('_layout/wraper', $data);
    }
}
