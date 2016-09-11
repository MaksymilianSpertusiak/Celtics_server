<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photos extends CI_Controller {

    function index() {
    }

    public function GetPhotos() {
        $this->load->database();
        $this->load->model('Photos_model');
        $gallery['photos'] = $this->Photos_model->get_photos();
        echo json_encode($gallery);
    }

}