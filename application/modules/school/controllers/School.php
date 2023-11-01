<?php 

class School extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }


    public function get_school_name(){
        echo "<h4>test test</h4>";
    }

    public function get_school_address()
    {
        echo"XYZ, simple location, somewhere city , test country";
    }
}

?>