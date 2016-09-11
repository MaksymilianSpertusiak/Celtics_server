<?php

class Photos_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_photos() {
        $counter = 0;
        $photos = "";
        $query = $this->db->query('Select * from gallery');
        foreach ($query->result() as $row) {
            $photos[$counter]['id'] = $row->id;
            $photos[$counter]['name'] = $row->name;
            $photos[$counter]['big'] = $row->big;
            $photos[$counter]['small'] = $row->small;
            $photos[$counter]['category'] = $row->category;
            $counter++;
        }
        return $photos;
    }

}