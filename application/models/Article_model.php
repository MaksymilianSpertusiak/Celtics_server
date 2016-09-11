<?php

class Article_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_arts() {
        $counter = 0;
        $news = "";
        $query = $this->db->query('Select * from article');
        foreach ($query->result() as $row) {
            $news[$counter]['id'] = $row->id;
            $news[$counter]['small_image_png'] = $row->small_image_png;
            $news[$counter]['large_image_png'] = $row->large_image_png;
            $news[$counter]['title'] = $row->title;
            $news[$counter]['content'] = $row->content;
            $counter++;
        }
        return $news;
    }

}
