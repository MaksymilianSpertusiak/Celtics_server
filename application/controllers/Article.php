<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        show_404();
    }

    public function GetArticles() {
        $this->load->model('Article_model');
        $arts['articles'] = $this->Article_model->get_arts();
        echo json_encode($arts);
    }

    public function GetArticle($id) {
        $this->load->model('Article_model');
        $arts['articles'] = $this->Article_model->get_art($id);
        echo json_encode($arts);
    }

}
