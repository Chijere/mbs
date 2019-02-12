<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Controller {

    public function index() {
        //$this->load->view('header');
        $this->load->view('samples/new_sample');
        //$this->load->view('footer');
    }

    public function line_charts() {
        //$this->load->view('header');
        $this->load->view('reports/line_charts');
        //$this->load->view('footer');
    }

}

?>