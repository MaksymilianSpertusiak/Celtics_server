<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {

    function index() {
        
    }
    
    public function GetStatistics($season) {
        $this->load->database();
        $this->load->model('Statistics_model');
        $statistics['statistics'] = $this->Statistics_model->get_statistics($season);
        echo json_encode($statistics);
    }

}
