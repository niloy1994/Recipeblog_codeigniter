<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('categorymodel');
		$this->load->model('recipemodel');
		$this->load->model('usermodel');
        $this->load->library('parser');
		if (! $this->session->userdata['user']['username'])
        {
            redirect('localhost/recipe_ci'); // the user is not logged in, redirect them!
        }
		
		
	}

	public function index()
	{	
	    
	    $data['recipes'] = $this->recipemodel->latest_recipes();
	    $data['recipe_of_the_day'] = $this->recipemodel->recipe_of_the_day();
	    $data['total_recipes'] = $this->recipemodel->total_recipes();
	    $data['user_of_the_day'] = $this->usermodel->user_of_the_day();
        $data['total_users'] = $this->usermodel->total_users();
	    $data['users'] = $this->usermodel->user();
		//echo '<pre>';
		//print_r($data);
		//die;
		$this->load->view('view_userhome',$data);
		
	}
	
	public function users()
	{	
	   
	   
	    $data['users'] = $this->usermodel->users();
		//echo '<pre>';
		//print_r($data);
		//die;
		$this->load->view('view_users',$data);
	}

    public function profile()
    {


        $data['user'] = $this->usermodel->profile();
        $data['user_uploads'] = $this->usermodel->uploads();
        /*echo '<pre>';
        print_r($data);
        die;*/
       // $this->load->view('view_user_profile',$data);
        $this->parser->parse('view_user_profile', $data);
    }

    /*public function best_user()
    {
        $data['user'] = $this->usermodel->select_user();


        $this->load->view('view_best_user', $data);
    }
    public function user_of_the_day()
    {

            $user_of_the_day = $this->input->post('best_user');

            $data = array(
                'user_of_the_day' => 0

            );
            $this->db->where('user_of_the_day', 1);
            $this->db->update('users', $data);

            $data1 = array(
                'user_of_the_day' => 1

            );
            $this->db->where('firstname', $user_of_the_day);
            $this->db->update('users', $data1);





    }*/

	public function add()
	{	
	
	
		   
	    if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('view_adduser', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('sign_up'))
			{
				$firstname = $this->input->post('firstname');
				$lastname = $this->input->post('lastname');
				
				$email = $this->input->post('email');
				$type = $this->input->post('u_type');
				$password = $this->input->post('password');
				//$this->load->model('usermodel');
				$this->usermodel->insert($firstname,$lastname,$type,$email,$password);
				redirect('http://localhost/recipe_ci/user/users');
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('view_adduser', $data);
			}
		}
	}
	
	public function edit($uid = 0)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			
			$user = $this->usermodel->get_user($uid);
			
		    $data['type'] = array('admin', 'user');
            

			$data['user'] = $user;
			$this->load->view('view_edituser', $data);
		}
		else
		{
			if($this->form_validation->run('sign_up'))
			{
				$firstname = $this->input->post('firstname');
				$lastname = $this->input->post('lastname');
				$type = $this->input->post('type');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$id = $this->input->post('user_id');
				
				
				
				$this->usermodel->update($firstname,$lastname,$type,$email,$password,$id);
				redirect('http://localhost/recipe_ci/user/users');
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('view_viewusers', $data);
			}
		}
	}
	public function delete($uid = 0)
	{	

		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$user = $this->usermodel->get_user($uid);

			$data['user'] = $user;
			$this->load->view('view_deluser', $data);
		}
		else
		{
			$this->usermodel->delete($uid);
			redirect('http://localhost/recipe_ci/user/users');
			
		}
	}
}