<?php

namespace App\Controllers;
Use App\Models\Productos_model;
Use App\Models\Galeria_model;

class Productos_Controllers extends baseController{

    public function panelProductos (){
        $data ['titulo']='Vegetarian :: Panel Productos';
        echo view('head', $data);

        $productos = new Productos_model();
        $datos['productos'] = $productos -> orderBy ('id', 'ASC') ->findAll();

        return view('back/panelProductos', $datos);
    }

    public function panelEliminados (){
        $data ['titulo']='Vegetarian :: Usuarios Eliminados';
        echo view('head',$data);
        
        $productos = new Productos_model();
        $datos['productos']= $productos -> orderBy('id','ASC') -> findAll();
        return view('back/panelProductosEliminados', $datos);
    }
 
    public function new (){

        $data['titulo']='Vegetarian :: Carga Productos';
        echo view('head',$data);
        
        return view('back/cargaProductos', ['validation' => $this->validator]);
    }

    public function create (){

        $data ['titulo'] = 'Vegetarian:: Carga Productos';
        echo view('head',$data);

        $productos = new Productos_model();
        if ($this->validate('validacionProductos')){
            $productos -> insert(
                [
                    'nombreProducto' => $this ->request->getPost('nombreProducto'),
                    'stock'          => $this ->request->getPost('stock'),
                    'descripcion'    => $this ->request->getPost('descripcion'),
                    'precio'         => $this ->request->getPost('precio'),
                    'seccion'        => $this ->request->getPost('seccion'),
                ]
            );
            return $this->response->redirect(site_url('panelProductos'));
        }

        return view('back/cargaProductos', ['validation' => $this->validator]);
    }

    public function editar ($id = null){
        $data['titulo']='Vegetarian :: Editar Usuario';
        echo view('head',$data);

        $productos = new Productos_model();
        $datos['productos']=$productos->where('id',$id)->first();

        return view('back/editarProducto', $datos);
    }

    public function actualizar (){

        $data['titulo']='Vegetarian :: Editar Usuario';
        echo view('head',$data);
        
        $producto = new Productos_model();
        
        $datos =[
            'nombreProducto' => $this ->request->getPost('nombreProducto'),
            'stock'          => $this ->request->getPost('stock'),
            'descripcion'    => $this ->request->getPost('descripcion'),
            'precio'         => $this ->request->getPost('precio'),
            'seccion'        => $this ->request->getPost('seccion'),
        ];
        
        $id = $this->request->getVar('id');
        $producto ->update($id,$datos);
        
        return $this->response->redirect(site_url('panelProductos'));
    }

    public function borrar ($id=null){

        $productos = new Productos_model();
        
        $datos['productos']=$productos->where('id',$id)->first();
        $datos = [
            'baja' => '1',
        ];

        $productos ->update($id,$datos);
        return $this->response->redirect(site_url('panelProductos'));
    }

    public function restaurar ($id=null){

        $productos = new Productos_model();
        
        $datos['productos']=$productos->where('id',$id)->first();
        $datos = [
            'baja' => null,
        ];

        $productos ->update($id,$datos);
        return $this->response->redirect(site_url('panelProductos'));
    }

    public function mostrarProductos (){

        $productos = new Productos_model();
        $galeria = new Galeria_model();

        $data2 ['galeria'] = $galeria -> orderBy ('id','ASC')-> findAll();
        $datos['productos'] = $productos -> orderBy ('id', 'ASC') ->findAll();

        $data['titulo']='Vegetarian :: Productos';
        echo view('head',$data);
        
        echo view('navegador');
        echo view('productos', $datos);
        echo view('back/galeria/galeria',$data2);
        echo view('footer');       

        return $datos;
    }


    /* 
    Galeria de fotos para la vista productos
    */

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
        $file->move('assets/uploads', $name);

        $image = new Galeria_Model();
        $image->save([
            'nombre' => $name,
            'nameImg' => $this -> request -> getPost('nombreImg'),
        ]);

        session()->setFlashdata('success', 'Se cargo la imagen correctamente');
        return redirect()->to(site_url('cargarImagen'))->withInput()->with('previewImage', $name);   
    }
}
