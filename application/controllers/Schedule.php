<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        show_404();
    }

    public function GetSchedule() {
        $this->load->model('Schedule_model');
        $schedule['game'] = $this->Schedule_model->get_schedule();
        echo json_encode($schedule);
    }

}
