<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roster extends CI_Controller {

    function index() {
        
    }

    public function GetPlayers() {
        $this->load->database();
        $this->load->model('Players_model');
        $players['players'] = $this->Players_model->get_players();
        echo json_encode($players);
    }

    public function GetPlayer($id) {
        $this->load->database();
        $this->load->model('Players_model');
        $player['player'] = $this->Players_model->get_player($id);
        echo json_encode($player);
    }

}
