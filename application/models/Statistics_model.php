<?php

class Statistics_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_statistics($season) {
        $statistics = "";
        $counter = 0;
        $content = 'SELECT statistics.*, roster.image ' .
                'FROM statistics ' .
                'LEFT JOIN roster ' .
                'ON statistics.number = roster.number ' .
                'WHERE statistics.season = "' . $season . '"';
        $query = $this->db->query($content);
        foreach ($query->result() as $row) {
            $statistics[$counter]['id'] = $row->id;
            $statistics[$counter]['season'] = $row->season;
            $statistics[$counter]['name'] = $row->name;
            $statistics[$counter]['number'] = $row->number;
            $statistics[$counter]['position'] = $row->position;
            $statistics[$counter]['games'] = $row->games;
            $statistics[$counter]['points'] = $row->points;
            $statistics[$counter]['fg'] = $row->fg;
            $statistics[$counter]['fg_perc'] = $row->fg_perc;
            $statistics[$counter]['tp_perc'] = $row->tp_perc;
            $statistics[$counter]['ft_perc'] = $row->ft_perc;
            $statistics[$counter]['oreb'] = $row->oreb;
            $statistics[$counter]['dreb'] = $row->dreb;
            $statistics[$counter]['ast'] = $row->ast;
            $statistics[$counter]['stl'] = $row->stl;
            $statistics[$counter]['turnovers'] = $row->turnovers;
            $statistics[$counter]['pf'] = $row->pf;
            $statistics[$counter]['image'] = $row->image;
            $counter++;
        }
        return $statistics;
    }

}
