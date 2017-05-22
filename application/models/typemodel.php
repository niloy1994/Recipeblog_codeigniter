<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Typemodel extends CI_Model {

    public function insert($type)
    {
        $sql = "INSERT INTO difficulty VALUES (null, '$type')";
        $this->load->database();
        $this->db->query($sql);
    }
    public function getAll()
    {
        $sql = "SELECT * FROM difficulty";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function get($id)
    {
        $sql = "SELECT * FROM difficulty WHERE id=$id";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->row_array();
    }


}