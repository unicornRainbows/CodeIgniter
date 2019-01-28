<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Todo_model extends CI_Model {


    function __construct() {
        parent::__construct();
    }


    function get_all_entries() {

        $this->db->order_by('order','asc');
        $query = $this->db->get('todos');
        $results = array();

        foreach ($query->result() as $result) {
            $results[] = $result;
        }
        return $results;
    }


    function update_entries($update_info, $update_criteria = array()) {

        $this->db->update('todos', $update_info, $update_criteria);
    }


    function insert_entry($new_todo) {

        $this->db->insert('todos', $new_todo);
    }

}