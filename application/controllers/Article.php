<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function index() {
    }

    public function GetArticle() {
        $this->load->database();
        $this->load->model('Article_model');
        $liczba = $this->Article_model->count();
        $arts['articles'] = $this->Article_model->get_arts();
        echo json_encode($arts);
    }

}
