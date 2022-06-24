<?php

namespace App\Controllers;

use App\Models\Productos_model;
use App\Models\Usuarios_model;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Vegetarian :: Inicio';
        echo view('head',$data);
        echo view('navegador');
        echo view('principal');
        echo view('footer');
    }

    public function productos()
    {
        $data['titulo']='Vegetarian :: Productos';
        echo view('head',$data );
        echo view('navegador');
        echo view('productos');
        echo view('back/galeria/galeria');
        echo view('footer');

    }

    public function nosotros()
    {
        $data['titulo']='Vegetarian :: Nosotros';
        echo view('head',$data);
        echo view('navegador');
        echo view('nosotros');
        echo view('galeria');
        echo view('footer');

    }

    public function contacto()
    {
        $data['titulo']='Vegetarian :: Contacto';
        echo view('head',$data);
        echo view('navegador');
        echo view('formulario-consulta');
        echo view('puntos-de-ventas');
        echo view('footer');
    }

    public function comercializacion(){
        $data['titulo']='Vegetarian :: Comercializacion';
        echo view('head',$data);
        echo view('navegador');
        echo view('comercializacion');
        echo view('footer');
    }

    public function sesion(){
        $data['titulo']='Vegetarian :: Sesion';
        echo view('head',$data);
        echo view('inicio-sesion'); 
        
    }


    // public function panel(){
    //     $data ['titulo'] = 'Vegetarian :: Panel de Control';
    //     echo view ('head', $data);
    //     echo view ('navegador');
    //     echo view ('back/panel');
    //     echo view ('footer');

    // }
    
    
    


    // public function contacto(){
    //     echo view('head',$data);
    //     echo view('contacto');
    //     echo view('footer');
    // }
}
