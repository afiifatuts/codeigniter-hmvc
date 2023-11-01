<?php 

class Stringg extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function my_strlen($str){

        return strlen($str);
    }

    public function my_uppercase($str){
        return strtoupper($str);
    }
}



?>