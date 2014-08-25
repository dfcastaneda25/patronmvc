<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Request
{
    private $_controlador;
    private $_metodo;
    private $_argumentos;
    
    public function __construct() {
        if(isset($_GET('url')))(
               $url = fliter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL)
      )
    }
            
 )
}


?>
