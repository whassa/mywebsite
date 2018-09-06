<?php
    namespace app;
    
    class index
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
               http_response_code(404);
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
        new index($controller, $action);
    } else {
        new index($controller, 'index');
    }
?>
