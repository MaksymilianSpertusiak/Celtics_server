<?php

class Schedule_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_schedule() {
        $counter = 0;
        $game = "";
        $query = $this->db->query('Select * from schedule');
        foreach ($query->result() as $row) {
            $game[$counter]['id'] = $row->id;
            $game[$counter]['date'] = $row->date;
            $game[$counter]['opponent'] = $row->opponent;
            $game[$counter]['area'] = $row->area;
            $game[$counter]['opponent_logo'] = $row->opponent_logo;
            $counter++;
        }
        return $game;
    }

}
