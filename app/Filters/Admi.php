<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Admi implements FilterInterface{
    
    public function before(RequestInterface $request, $arguments = null)
    {
        
        if(session()->rango != 2){
            return redirect()->route('login');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}