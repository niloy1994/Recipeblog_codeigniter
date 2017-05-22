<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Types extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('typemodel');
        if (! $this->session->userdata['user']['username'])
        {
            redirect('localhost/recipe_ci'); // the user is not logged in, redirect them!
        }
    }
    public function index()
    {
        $data['types'] = $this->typemodel->getAll();
        $this->load->view('view_types', $data);
    }





}

