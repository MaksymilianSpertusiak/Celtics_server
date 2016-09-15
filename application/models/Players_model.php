<?php

class Players_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_players() {
        $counter = 0;
        $players = "";
        $query = $this->db->query('Select id, name, position, number, image, date_of_birth, weight, height, country from roster');
        foreach ($query->result() as $row) {
            $players[$counter]['id'] = $row->id;
            $players[$counter]['name'] = $row->name;
            $players[$counter]['number'] = $row->number;
            $players[$counter]['image'] = $row->image;
            $players[$counter]['date_of_birth'] = $row->date_of_birth;
            $players[$counter]['weight'] = $row->weight;
            $players[$counter]['height'] = $row->height;
            $players[$counter]['country'] = $row->country;
            $counter++;
        }
        return $players;
    }

    function get_player($id) {
        $player = "";
        $content = 'Select * from roster WHERE id=' . $id;
        $query = $this->db->query($content);
        foreach ($query->result() as $row) {
            $player['id'] = $row->id;
            $player['name'] = $row->name;
            $player['number'] = $row->number;
            $player['image'] = $row->image;
            $player['date_of_birth'] = $row->date_of_birth;
            $player['weight'] = $row->weight;
            $player['height'] = $row->height;
            $player['country'] = $row->country;
            $player['years_pro'] = $row->years_pro;
            $player['prior_to_nba'] = $row->prior_to_nba;
            $player['bio'] = $row->bio;
        }
        return $player;
    }

}
