<?php
    namespace app\controller;
    if(!function_exists('view')){
        function view($view){                                             
            return include( dirname(__FILE__).'//../view/'.$view);
        }
    }
