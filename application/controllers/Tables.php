<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller {

    public function index() {
        //$this->load->view('header');
        $this->load->view('data/tabs');
        //$this->load->view('footer');
    }

}

?>