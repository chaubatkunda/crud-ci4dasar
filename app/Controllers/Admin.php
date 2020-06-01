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
    public function create()
    {
        echo "Berhasil";
    }
    public function home()
    {
        $data = [
            'title'     => 'Home',
            'conten'    => 'admin/home/index'
        ];
        return view('_layout/wraper', $data);
    }
}
