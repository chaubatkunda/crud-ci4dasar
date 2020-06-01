<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->testimonial = new AdminModel();
        helper('form');
    }
    public function home()
    {
        $data = [
            'title'         => 'Home',
            'conten'        => 'admin/home/index'
        ];
        return view('_layout/wraper', $data);
    }

    public function testimonial()
    {
        $data = [
            'title'         => 'Testimonial',
            'testimonial'   =>  $this->testimonial->getTestimonial(),
            'conten'        => 'admin/testimonial/index'
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
    public function store()
    {
        $image = $this->request->getFile('image');
        $name = $image->getRandomName();
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'image'      => $name
        ];
        $image->move(ROOTPATH . 'public/upload', $name);
        $save = $this->testimonial->insertTestimonial($data);
        return redirect()->to('admin/testimonial');
    }
}
