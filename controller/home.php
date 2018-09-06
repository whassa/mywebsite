<?php
    namespace app\controller;
    include 'master.php';
    
    class home{
        
        public static function index(){
          
            return view('index.php');
        }
        
    }


?>
