<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samples extends MY_Controller {

    public function index() {
        //$this->load->view('header');
        $this->load->view('samples/new_sample');
        //$this->load->view('footer');
    }

    public function new_sample() {
        //$this->load->view('header');
        $this->load->view('samples/new_sample');
        //$this->load->view('footer');
    }

    public function single_sample() {
        //$this->load->view('header');
        $this->load->view('samples/single_sample');
        //$this->load->view('footer');
    }

    public function all_samples() { // previous samples
        //$this->load->view('header');
        $this->load->view('samples/all_samples');
        //$this->load->view('footer');
    }

}

?>