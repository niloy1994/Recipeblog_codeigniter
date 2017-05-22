<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('usermodel');
	}

	public function index()
	{	
		if(!$this->input->post('buttonSubmit')){
			$data['email']="";
			$data['message']="";
			$this->load->view('view_index',$data);
		}
		else{
			$this->load->model('usermodel');
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			if($email=="" || $password==""){
				$data['email']=$email;
				$data['message']="Please Enter Email & Password";
				$this->load->view('view_index',$data);
			}
			else{
				if(!$user=$this->usermodel->get($email)){
					$data['email']=$email;
					$data['message']="Invalid email,please give an valid email";
					$this->load->view('view_index',$data);
				}
				else{
					if($user['password']==$password){
						if($user['type']=='admin'){
							$userinfo = array(
							               'id'  => $user['id'],
                                           'username'  => $user['firstname'],
                                           'email'     => $user['email'],
										   'user_type'     => $user['type'],
										   
                                        
                                           );
										   //echo '<pre>';
										   //print_r($userinfo);
										   //die;

                            $this->session->set_userdata('user',$userinfo);
							//$sess = $this->session->userdata("user");
							//print_r($sess);
							//die;
							
							
							redirect("http://localhost/recipe_ci/admin");
						}
						
						else if($user['type']=='user'){
							$userinfo = array(
							               'id'  => $user['id'],
                                           'username'  => $user['firstname'],
                                           'email'     => $user['email'],
                                           'user_type'     => $user['type'],
										   
                                        
                                           );
										   //echo '<pre>';
										   //print_r($userinfo);
										   //die;

                            $this->session->set_userdata('user',$userinfo);
							//$sess = $this->session->userdata("user");
							//print_r($sess);
							//die;
							
							
							redirect("http://localhost/recipe_ci/user");
							
						}
					}
					else{
						$data['email']=$email;
						$data['message']="Your Password is wrong";
						$this->load->view('view_index',$data);
					}
				}
			}
			
			
		}
	}
	
	public function sign_up()
	{
		
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('view_signup', $data);
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
				redirect('http://localhost/recipe_ci/login');
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('view_signup', $data);
			}
		}
	}
		
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('http://localhost/recipe_ci/login');
		
		

	}

	
}