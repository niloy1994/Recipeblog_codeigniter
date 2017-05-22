<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

	public function get($email)
	{
		$sql = "SELECT * FROM users WHERE email='$email'";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->row_array();
	}
	
	public function insert($firstname,$lastname,$type,$email,$password)
	{
		$sql = "INSERT INTO users VALUES (null, '$firstname','$lastname','$type','$email','$password','')";
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
    public function user()
    {
        $sql = "SELECT * FROM users WHERE type='user'";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }
   /* public function select_user()
    {
        $this->load->database();
        $result = $this->db->get('users');

        return $result->result_array();

    }
    public function user_day()
    {
        $this->load->database();
        $result = $this->db->get_where('users', array('user_of_the_day' => 1));

        return $result->result_array();

    }*/
    public function total_users()
    {
        $sql = "SELECT COUNT(id) as num_of_users FROM users WHERE type='user'";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function user_of_the_day()
    {
        $sql = "SELECT * FROM users WHERE user_of_the_day=1 ";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function profile()
    {
        $user=$this->session->userdata['user']['id'];
        $sql = "SELECT * FROM users WHERE id=$user ";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();


    }
    public function uploads()
    {
        $user=$this->session->userdata['user']['id'];
        $sql = "SELECT * FROM recipes WHERE uploaded_by=$user ";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();


    }
	
	public function get_user($id)
	{
		$sql = "SELECT * FROM users WHERE id=$id";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function update($firstname,$lastname,$type,$email,$password,$id)
	{
		$sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',type='$type',email='$email',password='$password',user_of_the_day='' WHERE id=$id";
		$this->load->database();
		$this->db->query($sql);
	}
	public function delete($id)
	{
		$sql = "DELETE FROM users WHERE id=$id";
		$this->load->database();
		$this->db->query($sql);
	}
}