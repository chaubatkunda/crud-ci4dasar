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
    public function edit($id)
    {
        $data = [
            'title'     => ' Edit',
            'testimoni' => $this->testimonial->getTestimonialById($id),
            'conten'    => 'admin/testimonial/edit'
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
        return redirect()->to(base_url('admin/testimonial'));
    }
    public function update($id)
    {
        $gambar = $this->testimonial->getTestimonialById($id)->image;
        $folder = FCPATH . "upload/";
        $isifolder = $folder . $gambar;
        $image = $this->request->getFile('image');
        $name = $image->getName();
        if (is_null($name)) {
            $data = [
                'nama'      => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ];
        } else {
            @unlink($isifolder);
            $data = [
                'nama'      => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'image'      => $name
            ];
            $image->move(ROOTPATH . 'public/upload', $name);
        }
        $this->testimonial->updateTestimonial($id, $data);
        return redirect()->to(base_url('admin/testimonial'));
    }
}
