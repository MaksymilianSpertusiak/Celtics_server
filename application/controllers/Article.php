<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    function index() {
        
    }

    public function GetArticles() {
        $this->load->database();
        $this->load->model('Article_model');
        $arts['articles'] = $this->Article_model->get_arts();
        echo json_encode($arts);
    }

    public function GetArticle($id) {
        $this->load->database();
        $this->load->model('Article_model');
        $arts['articles'] = $this->Article_model->get_art($id);
        echo json_encode($arts);
    }

}
