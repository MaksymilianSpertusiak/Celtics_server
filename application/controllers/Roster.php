<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roster extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function index() {
        show_404();
    }

    public function GetPlayers() {
        $this->load->model('Players_model');
        $players['players'] = $this->Players_model->get_players();
        echo json_encode($players);
    }

    public function GetPlayer($id) {
        $this->load->model('Players_model');
        $player['player'] = $this->Players_model->get_player($id);
        echo json_encode($player);
    }

}
