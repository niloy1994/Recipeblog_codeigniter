<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Likemodel extends CI_Model {


    public function insert($user_id,$id,$now)
    {
        $sql = "INSERT INTO likes VALUES (null, '$user_id','$id','$now')";
        $this->load->database();
        $this->db->query($sql);

    }

    public function users()
    {
        $sql = "SELECT * FROM users";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }

}