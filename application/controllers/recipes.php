<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('categorymodel');
        $this->load->model('recipemodel');
        $this->load->model('typemodel');
        $this->load->model('likemodel');
        if (!$this->session->userdata['user']['username']) {
            redirect('localhost/recipe_ci'); // the user is not logged in, redirect them!
        }


    }

    public function index()
    {
        $data['recipes'] = $this->recipemodel->getAll();


        $this->load->view('view_recipes', $data);
    }

    public function user_recipes()
    {
        $data['recipes'] = $this->recipemodel->getAll();
        /*echo '<pre>';
        print_r($data);
        die;*/
        $this->load->view('view_recipe', $data);
    }

    public function cat_recipes($cid = 0)
    {

        $data['recipes'] = $this->recipemodel->cat_recipes($cid);
        //echo '<pre>';
        //print_r($data);
        //die;
        $user_type = $this->session->userdata['user']['user_type'];
        //print_r($user_type);
        //die;
        if ($this->session->userdata['user']['user_type'] == "admin") {
            $this->load->view('view_recipes', $data);
        } else {
            $this->load->view('view_recipe', $data);
        }
    }

    public function type_recipes($tid = 0)
    {

        $data['recipes'] = $this->recipemodel->type_recipes($tid);
        //echo '<pre>';
        //print_r($data);
        //die;
        $user_type = $this->session->userdata['user']['user_type'];
        //print_r($user_type);
        //die;
        if ($this->session->userdata['user']['user_type'] == "admin") {
            $this->load->view('view_recipes', $data);
        } else {
            $this->load->view('view_recipe', $data);
        }
    }

    public function add()
    {
        if (!$this->input->post('buttonSubmit')) {

            $data['message'] = '';

            $data['cats'] = $this->categorymodel->getAll();
            $data['diff'] = $this->typemodel->getAll();

            if ($this->session->userdata['user']['user_type'] == "admin") {
                $this->load->view('view_addrecipe', $data);
            } else {
                $this->load->view('view_addrecipes', $data);
            }

        } else {
            $this->load->library('form_validation');
            if ($this->form_validation->run('add_recipe')) {
                $name = $this->input->post('name');
                $cat_id = $this->input->post('cat');
                $type = $this->input->post('type');
                $description = $this->input->post('description');
                $difficulty_id = $this->input->post('difficulty');
                $preparation_time = $this->input->post('preparation_time');
                $cooking_time = $this->input->post('cooking_time');
                $serves = $this->input->post('serves');
                $ingredients = $this->input->post('ingredients');
                $procedures = $this->input->post('procedures');
                $now = date("Y-m-d H:i:s");
                $uploaded_by = $this->session->userdata['user']['id'];


                $this->recipemodel->insert($name, $cat_id, $uploaded_by, $type, $description, $difficulty_id,
                    $preparation_time, $cooking_time, $serves, $ingredients, $procedures, $now);
                if ($this->session->userdata['user']['user_type'] == "admin") {
                    redirect('http://localhost/recipe_ci/recipes');
                } else {
                    redirect('http://localhost/recipe_ci/recipes/user_recipes');
                }

            } else {
                $data['message'] = validation_errors();
                $data['cats'] = $this->categorymodel->getAll();
                if ($this->session->userdata['user']['user_type'] == "admin") {
                    $this->load->view('view_addrecipe', $data);
                } else {
                    $this->load->view('view_addrecipes', $data);
                }
            }
        }
    }

    public function edit($rid = 0)
    {
        if (!$this->input->post('buttonSubmit')) {
            $data['message'] = '';
            $recipe = $this->recipemodel->get($rid);
            $data['cats'] = $this->categorymodel->getAll();
            $data['type'] = array('regular', 'special');


            $data['recipe'] = $recipe;
            $this->load->view('view_editrecipe', $data);
        } else {
            if ($this->form_validation->run('edit_recipe')) {
                $name = $this->input->post('name');
                $cat_id = $this->input->post('cat');
                $type = $this->input->post('type');
                $description = $this->input->post('description');
                $difficulty_id = $this->input->post('difficulty');
                $preparation_time = $this->input->post('preparation_time');
                $cooking_time = $this->input->post('cooking_time');
                $serves = $this->input->post('serves');
                $ingredients = $this->input->post('ingredients');
                $procedures = $this->input->post('procedures');
                $id = $this->input->post('recipe_id');
                //$now = date("Y-m-d H:i:s");
                //$uploaded_by=$this->session->userdata['user']['id'];


                $this->recipemodel->update($name, $cat_id, $type, $description, $difficulty_id,
                    $preparation_time, $cooking_time, $serves, $ingredients, $procedures, $id);
                redirect('http://localhost/recipe_ci/recipes');
            } else {
                $data['message'] = validation_errors();
                $this->load->view('view_viewrecipes', $data);
            }
        }
    }

    public function delete($rid = 0)
    {

        if (!$this->input->post('buttonSubmit')) {
            $data['message'] = '';
            $recipe = $this->recipemodel->get($rid);

            $data['recipe'] = $recipe;
            $this->load->view('view_delrecipe', $data);
        } else {
            $this->recipemodel->delete($rid);
            if ($this->session->userdata['user']['user_type'] == "admin") {
                redirect('http://localhost/recipe_ci/recipes');
            }
            else{
                redirect('http://localhost/recipe_ci/recipes/user_recipes');

            }
        }



    }

    public function like($rid=0)
    {



            $user_id = $this->session->userdata['user']['id'];
            $now = date("Y-m-d H:i:s");

            $this->likemodel->insert($user_id,$rid,$now);


                redirect('http://localhost/recipe_ci/recipes/user_recipes');






    }

    /*public function post_like()
    {

        $user_id = $this->session->userdata['user']['id'];
        $recipe_id = $this->input->get('recipe_id');


        $now = date("Y-m-d H:i:s");
        $this->likemodel->insert($user_id, $recipe_id, $now);



        if ($this->likemodel->insert()) {
            return array(
                'status' => true,
                'msg' => 'Comment Successfully saved'


            );
        } else {
            return array(
                'status' => false,
                'msg' => 'Error'


            );
        }


    }*/
}

