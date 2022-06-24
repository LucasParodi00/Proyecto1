<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'my_list' => '_errors_list'
    ];


    public $inicioSesion = [
        'usuario' => 'required|min_length[3]',
        'password' => 'required|min_length[4]|max_length[10]',
        
    ];

    
    public $registro = [
        'cuit' => 'required|min_length[3]',
        'nomyape' => 'required|min_length[3]',
        'usuario' => 'required|min_length[3]',
        'email' => 'required',
        'password' => 'required',
        'tel'   => 'required',
        
     ];

     public $validacionProductos =[
         'nombreProducto' => 'required|min_length[3]',
         'precio'         => 'required',
         //'descripcion'    => 'required',
         'seccion'        => 'required|min_length[4]',
         'stock'          => 'required|min_length[3]',  
     ];

     public $reglasLogin =[
        'usuario' => [
            'rules' => 'required',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio'                
            ]
        ],

        'password' => [
            'rules' => 'required',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio'                
            ]
        ],
     ];

     public $reglasConsulta =[
        
        'nombrecompleto' => [
            'rules' => 'required',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio',
                
            ]
        ],

        'email' => [
            'rules' => 'required ',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio',     
                
            ]
        ],

        'telefono' => [
            'rules' => 'required ',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio',     
                
            ]
        ],

        'asunto' => [
            'rules' => 'required ',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio',     
                
            ]
            ],

        'mensaje' => [
            'rules' => 'required ',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio',     
                
            ]
        ]
     ];

     public $reglasConsulta2 =[
        'nombreCompleto' => [
            'rules' => 'required',
            'errors' =>[
                'required' =>'El campo {field} es obligatorio'                
            ]
        ],

        
     ];
    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------


    
}
