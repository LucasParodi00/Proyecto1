<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Galeria_Model;

class Galeria_Controller extends baseController
{

    public function index()
    {
        $data ['titulo']='Vegetarian :: Panel Productos';
        echo view('head', $data);
        return view('back/galeria/subir_imagen');
    }

    public function uploadImage()
    {
        $validated = $this->validate([
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]',
            ],
        ]);

        if (!$validated) {
            return view('upload', [
                'validation' => $this->validator
            ]);
        }

        $file = $this->request->getFile('image');
        $name = $file->getRandomName();
        $file->move('uploads', $name);

        $image = new Galeria_Model();
        $image->save([
            'nombre' => $name,
            'nameImg' =>$this->request-> getPost('nombreImg'),
        ]);

        session()->setFlashdata('success', 'Success! image uploaded.');
        return redirect()->to(site_url('/upload'))->withInput()->with('previewImage', $name);   
    }
}