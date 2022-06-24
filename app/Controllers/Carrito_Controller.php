<?php
namespace App\Controllers;

use App\Database\Migrations\usuarios;
use App\Models\Carrito_Model;
use CodeIgniter\Controller;
use App\Models\Productos_model;
use App\Models\Usuarios_model;
use App\Models\Ventas_Model;




class Carrito_Controller extends BaseController{

		

    public function agregar_carrito(){
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        
       
            $cart->insert(array(
            'id'      => $request->getPost('id'),
            'qty'     => 1,
            'price'   => $request->getPost('precio'),
            'name'    => $request->getPost('nombre'),
            ));
        return redirect()->route ('productos');
    }

    public function verCarrito(){
        $cart = \Config\Services::cart();
        $cart = array('cart' => $cart);
        $data['titulo'] = 'Carrito';
        echo view('head',$data);
        echo view('navegador');
        echo view('carrito',$cart);
        echo view('footer');
        
    }

    public function eliminarCarrito(){
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        
        $rowid = $request->getPostGet('rowid');

        $cart ->remove($rowid);

        return redirect()->route('carrito');

        //id = id del producto
        //rowid = fila del producto
    }

    public function vaciarCarrito(){
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->route('carrito');

    }

    public function sumar_carrito(){
        $cart = \Config\Services::cart();
        $cantidad = $cart->getItem($this->request->getGet("id"))["qty"];
        //var_dump($cart->);
        $cart->update(array(
            "rowid" => $this->request->getGet("id"),
            "qty" => $cantidad+1
        ));
        return redirect()->route('carrito');
    }

    public function restar_carrito(){
        $cart = \Config\Services::cart();
        $cantidad = $cart->getItem($this->request->getGet("id"))["qty"];
        //var_dump($cart->); 
        if($cantidad > 1){ 
            $cart->update(array(
                "rowid" => $this->request->getGet("id"),
                "qty" => $cantidad-1
            ));
        }
        return redirect()->route('carrito');
    }

    public function comprar (){ 
        $ventasModel = new Ventas_Model();
        $cart = \Config\Services::cart();  
        //$descripcion = '';
        $productos= '';
        $cantidad= '';
        $subTotal= '';
        $precio = '';

        foreach ($cart->contents() as $ventas){
            //$descripcion = $descripcion. " producto: " .$ventas ['name'] . " cantidad: " .$ventas ['qty'] . " SubTotal: ". $ventas['subtotal']   ."</br>";    

            $productos = $productos. $ventas['name'] ."</br>";
            $cantidad  = $cantidad. "x ".$ventas ['qty'] ."</br>";
            $subTotal = $subTotal. "$ ".$ventas ['subtotal'] ."</br>";
            $precio = $precio . "$ ".$ventas['price']. "</br>";
        } 

        $datos = [
            //'descripcion_venta' => $descripcion,
            'descripcion_venta' => $productos,
            'cantidad'          => $cantidad,
            'sub_total'          => $subTotal,
            'precio'            => $precio,
            'email_usuario'     => session('email'),
            'usuario'           => session('perfil_id'),
            'precio_total'      => $cart -> total(),
        ];
        
        $ventasModel -> insert($datos);
        return redirect()->route('vaciarCarrito');
    }

    
    public function verVentas(){
        
        $cart = \Config\Services::cart();
        
        $ventasModel = new Ventas_Model();
        
        $ventas = array('ventas' => $ventasModel-> findAll());
        
        $data['titulo'] = 'Detalles de Ventas';
        
        return view('head',$data). view('navegador') .view('back/carrito/verVentas', $ventas).view('footer');
        
    }
    
    public function misVentas(){
        
        $ventasModel = new Ventas_Model();    

        //$ventas['ventas'] = $ventasModel->select("*")->join("usuarios", "usuarios.id = ventas.id_usuarioC")->findAll();
       
        //$ventas2= $ventasModel->join ("usuarios", "usuarios.id = ventas.id_usuarioC");
        


        $ventas = array('ventas' => $ventasModel->findAll());

        $data['titulo'] = 'Mis Comrpas';
        echo view('head',$data);
        echo view('navegador');
        
        return view('back/carrito/misventas',$ventas). view('footer');
    }

   

}
?>