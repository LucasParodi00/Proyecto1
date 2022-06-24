<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Usuario_controller extends baseController{

    public function __construct(){
        $this -> UsuariosModel = new Usuarios_model();   
        
    }
 
    public function panel(){
        $data ['titulo']='Vegetarian :: Panel de Usuario';
        echo view('head',$data);
       
        $usuario = new Usuarios_model(); 
        $datos['usuarios']= $usuario -> orderBy('id','ASC') -> findAll();
        return view('back/panel', $datos);
    }
    
    public function panelEliminados (){
        $data ['titulo']='Vegetarian :: Usuarios Eliminados';
        echo view('head',$data);


        $usuario = new Usuarios_model();
        $datos['usuarios']= $usuario -> orderBy('id','ASC') -> findAll();
        return view('back/panelusuariosEliminados', $datos);
    }
    
   

    public function editar ($id = null){
        $data['titulo']='Vegetarian :: Editar Usuario';
        echo view('head',$data);
        

        $usuario = new Usuarios_model();
        $datos['usuario']=$usuario->where('id',$id)->first();

        
        return view('back/editarUsuario', $datos);
    }

    public function actualizar (){ 

        $data['titulo']='Vegetarian :: Editar Usuario';
        echo view('head',$data);
        

        $usuario = new Usuarios_model();
        
        $datos =[
                    'cuit' => $this->request->getPost('cuit'),
                    'nombreyapellido' => $this->request->getPost('nomyape'),
                    'perfil_id' => $this->request->getPost ('usuario'),
                    'email'  => $this->request->getPost('email'),
                    'telefono' => $this->request->getPost('tel'),
                    'localidad' => $this->request->getPost('localidad'),
                    'rango' => $this->request->getPost('rango'),
        ];
        
        $id = $this->request->getVar('id');
        

        $usuario ->update($id,$datos);
        

       return $this->response->redirect(site_url('panel'));
    }

    public function borrar ($id=null){
        $usuario = new Usuarios_model();
        //$datosUsuario = $usuario->where('id',$id)->first();
        //$usuario->where('id',$id)->delete($id);
        

        $datos['usuario']=$usuario->where('id',$id)->first();       
        $datos =[
          'baja' => '1',
        ];
        $usuario ->update($id,$datos);
        return $this->response->redirect(site_url('panel'));
    }
 
    public function restaurar ($id=null){
        $usuario = new Usuarios_model();
        //$datosUsuario = $usuario->where('id',$id)->first();
        //$usuario->where('id',$id)->delete($id);
        

        $datos['usuario']=$usuario->where('id',$id)->first();       
        $datos =[
          'baja' => null,
        ];
        $usuario ->update($id,$datos);
        return $this->response->redirect(site_url('panel'));
    }



    public function new (){

        $data['titulo']='Vegetarian :: Registro';
        echo view('head',$data);
        

        return view('registro', ['validation' => $this->validator]);
    }


    public function create (){

        $data['titulo']='Vegetarian :: Registro';
        echo view('head',$data);
        

        $usuarios = new Usuarios_model();
        
        if ($this->validate('registro')){
            $usuarios -> insert ( 
                [
                    'cuit' => $this->request->getPost('cuit'),
                    'nombreyapellido' => $this->request->getPost('nomyape'),
                    'perfil_id' => $this->request->getPost ('usuario'),
                    'email'  => $this->request->getPost('email'),
                    'telefono' => $this->request->getPost('tel'),
                    'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'localidad' => $this->request->getPost('localidad'),   
                ]
            );
            return $this->response->redirect(site_url('sesion'));
        }
        
        return view('registro', ['validation' => $this->validator]);
    }


    //Panel para crear usuarios por medio del administrador
    public function newUsuario (){

        $data['titulo']='Vegetarian :: Registro';
        echo view('head',$data);
      

        return view('back/registroAdmi', ['validation' => $this->validator]);
    }

    public function create2 (){

        $data['titulo']='Vegetarian :: NuevoUsuario';
        echo view('head',$data);
    

        $usuarios = new Usuarios_model();
        
        if ($this->validate('registro')){

            $usuarios -> insert (
                [
                    'cuit' => $this->request->getPost('cuit'),
                    'nombreyapellido' => $this->request->getPost('nomyape'),
                    'perfil_id' => $this->request->getPost ('usuario'),
                    'email'  => $this->request->getPost('email'),
                    'telefono' => $this->request->getPost('tel'),
                    'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'localidad' => $this->request->getPost('localidad'), 
                    
                ]
            );
            //return view('back/panel');
            //return $this->panel();
            return $this->response->redirect(site_url('panel'));
        }
        return view('back/registroAdmi', ['validation' => $this->validator]);
    }
      
    
    // Parte del login
    public function login(){
        $data['titulo']='Vegetarian :: Sesion';
        echo view('head',$data);
        echo view('inicio-sesion');      
        
    }

    public function validaciones (){
            
        if ($this->validate('reglasLogin')){
           
            $usuario = $this -> request -> getPost('usuario');
            $password = $this -> request -> getPost('password');
            $datosUsuario = $this -> UsuariosModel -> where ('perfil_id', $usuario)->first(); 
            //$datos['usuario']=$usuario->where('id',$id)->first();
            //$usuario = new Usuarios_model();
            if ($datosUsuario != null){
                
                if (password_verify($password, $datosUsuario['password'])){

                    $datosSession = [
                        'id' => $datosUsuario['id'],
                        'rango' => $datosUsuario['rango'],
                        'cuit' => $datosUsuario['cuit'],
                        'nombreyapellido' => $datosUsuario['nombreyapellido'],
                        'perfil_id' => $datosUsuario['perfil_id'],
                        'email' => $datosUsuario['email'],
                        'telefono' => $datosUsuario['telefono'],
                        'localidad' => $datosUsuario['localidad'],
                        'logueado' => true
                    ];

                    $session = session();
                    $session->set($datosSession);
                    //print_r($datosUsuario);
                    
                    return redirect()->to(base_url() .'/index');

                }else {
                    $datos['error'] = 'Contraseña incorrecta';

                    $data['titulo']='Vegetarian :: NuevoUsuario';
                    echo view('head',$data);
                    echo view ('inicio-sesion',$datos);
                    
                }

            } else{
                $datos['error'] = 'El usuario no existe';

                $data['titulo']='Vegetarian :: NuevoUsuario';
                echo view('head',$data);
                echo view('inicio-sesion',$datos);
            }

        }else {
            $datos = ['validation' => $this -> validator];

            $data['titulo']='Vegetarian :: NuevoUsuario';
            echo view('head',$data);
            echo view('inicio-sesion',$datos);
           
        }
    }

    public function logout (){
        $sesion = session();
        $sesion ->destroy();
        return redirect()->to(base_url() .'/index');
    }
}

 