<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_users extends MY_Controller {

    public function index() {
        //$this->load->view('header');
        $this->load->view('samples/new_sample');
        //$this->load->view('footer');
    }

    public function all_users() {
        //$this->load->view('header');
        $this->load->view('users/all_users');
        //$this->load->view('footer');
    }

}

?>