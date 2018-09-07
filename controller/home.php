<?php
    namespace app\controller;
    include 'master.php';
    
    class home{
        
        public static function index(){
          
            return view('index.php');
        }
        
        public static function error404(){
                
            return view('error404.php');
        }
        
    }


?>
