<?php
    namespace app;
    
    class actionController
    {
        public function __construct($controller, $action){
           $this->showView($controller, $action);
        }
        
        
        public function showView($controller, $action){
           try{
               include("controller/".$controller.".php");
               $html = call_user_func('app\\controller\\'.$controller .'::'.$action);
               echo $html;
           }catch(Exception $e){
               $html = call_user_func('app\\controller\\home::'.$action);
               die();
            }
        }
    }
    $file = dirname(__FILE__);
    if ( isset( $_REQUEST['controller'])){
        $controller =  $_REQUEST['controller'];
    } else {
        $controller = 'home';
    }
        
    if ( isset($_REQUEST['action'])) {
        $action =  $_REQUEST['action'];
        new actionController($controller, $action);
    } else {
        new actionController($controller, 'index');
    }
?>
