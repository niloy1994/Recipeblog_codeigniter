<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipemodel extends CI_Model {

	public function insert($name,$cat_id,$uploaded_by,$type,$description,$difficulty_id,
				$preparation_time,$cooking_time,$serves,$ingredients,$procedures,$now)
	{
		$sql = "INSERT INTO recipes VALUES (null, '$name','$cat_id','$uploaded_by','$type','$description','$difficulty_id',
				'$preparation_time','$cooking_time','$serves','$ingredients','$procedures','$now','')";
		$this->load->database();
		$this->db->query($sql);
	}
	public function getAll()
	{
		//$sql = "SELECT * FROM recipes";
        $sql = "SELECT recipes.*,(SELECT COUNT(id) FROM likes WHERE likes.recipe_id=recipes.id) as num_of_likes FROM recipes";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}
    public function total_recipes()
    {
        $sql = "SELECT COUNT(id) as num_of_recipes FROM recipes";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }
	
	
	public function latest_recipes()
	{
		$sql = "SELECT * FROM recipes ORDER BY upload_time DESC LIMIT 4";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}

    public function recipe_of_the_day()
    {
       // $sql = "SELECT * FROM recipes WHERE recipe_of_the_day=1 ";
        $sql = "SELECT count(l.id) as num_of_like , recipes.* from likes as l inner join recipes on recipes.id = l.recipe_id group by l.recipe_id order by num_of_like desc LIMIT 1";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
        return $result->result_array();
    }
	public function cat_recipes($id)
	{
		$sql = "SELECT * FROM recipes WHERE category_id=$id";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}
    public function type_recipes($id)
    {
        $sql = "SELECT * FROM recipes WHERE difficulty_id=$id";
        $this->load->database();
        $result = $this->db->query($sql);
        return $result->result_array();
    }
	
	public function get($id)
	{
		$sql = "SELECT * FROM recipes WHERE id=$id";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function update($name,$cat_id,$type,$description,$difficulty,
				$preparation_time,$cooking_time,$serves,$ingredients,$procedures,$id)
	{
		$sql = "UPDATE recipes SET name='$name',category_id='$cat_id',type='$type',description='$description',difficulty_id='$difficulty',
		preparation_time='$preparation_time',cooking_time='$cooking_time',serves='$serves',ingredients='$ingredients',procedures='$procedures',recipe_of_the_day='' WHERE id=$id";
		$this->load->database();
		$this->db->query($sql);
	}
	public function delete($id)
	{
		$sql = "DELETE FROM recipes WHERE id=$id";
		$this->load->database();
		$this->db->query($sql);
	}
}