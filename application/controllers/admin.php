<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		
		if (! $this->session->userdata['user']['username'])
        {
            redirect('localhost/recipe_ci'); // the user is not logged in, redirect them!
        }
		
		
	}

	public function index()
	{	
	    
		$this->load->view('view_home');
	}
}