<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        show_404();
    }

    public function GetStatistics($season) {
        $this->load->model('Statistics_model');
        $statistics['statistics'] = $this->Statistics_model->get_statistics($season);
        echo json_encode($statistics);
    }

}
