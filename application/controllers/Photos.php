<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        show_404();
    }

    public function GetPhotos() {
        $this->load->model('Photos_model');
        $gallery['photos'] = $this->Photos_model->get_photos();
        echo json_encode($gallery);
    }

}
