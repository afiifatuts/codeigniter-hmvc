<?php 

class Message extends MY_Controller{


    public function __construct()
    {
        parent::__construct();
        // $this->load->model("");
        // $this->load->library("");
        // $this->load->helper("");
      
    }

    public function show_message(){
        echo "<h3>Thisis my simple message</h3>";
        $this->school->get_school_name();
        $this->school->get_school_address();

        $str = "Online web tutor";

        echo "<br/> <br/>";
        echo $this->stringg->my_strlen($str);
        echo "<br/> <br/>";
        echo $this->stringg->my_uppercase($str);
    }


    public function simpleMessage(){
        $content['message']= "Simple view message I am writting";

        $this->load->view("message/simple-message",$content);
    }
}

?>