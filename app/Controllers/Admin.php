<?php

namespace App\Controllers;


class Admin extends BaseController
{
    public function home()
    {
        $data = [
            'title'     => 'Home',
            'conten'    => 'admin/home/index'
        ];
        return view('_layout/wraper', $data);
    }

    public function testimonial()
    {
        $data = [
            'title'     => 'Testimonial',
            'conten'    => 'admin/testimonial/index'
        ];
        return view('_layout/wraper', $data);
    }
    public function create()
    {
        $data = [
            'title'     => ' Create',
            'conten'    => 'admin/testimonial/create'
        ];
        return view('_layout/wraper', $data);
    }
}
