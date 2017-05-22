<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (


    'sign_up' => array (
		array(
		        'field' => 'firstname',
		        'label' => 'First Name',
		        'rules' => 'required'
		     ),
	    array(
		        'field' => 'lastname',
		        'label' => 'Last Name',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'email',
		        'label' => 'email',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required'
		     )
			
		),
		
	'addcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Categoey Name',
		        'rules' => 'required'
		     )
		),
	'editcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Categoey Name',
		        'rules' => 'required'
		     )
		),
	'add_recipe' => array (
		array(
		        'field' => 'name',
		        'label' => 'Name',
		        'rules' => 'required'
		     ),
	    array(
		        'field' => 'description',
		        'label' => 'Description',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'preparation_time',
		        'label' => 'Preparation time',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'cooking_time',
		        'label' => 'Cooking time',
		        'rules' => 'required'
		     ),
	    array(
		        'field' => 'serves',
		        'label' => 'Serves',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'ingredients',
		        'label' => 'Ingredients',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'procedures',
		        'label' => 'Procedures',
		        'rules' => 'required'
		     )
			 
		),
	'edit_recipe' => array (
		array(
		        'field' => 'name',
		        'label' => 'Name',
		        'rules' => 'required'
		     ),
	    array(
		        'field' => 'description',
		        'label' => 'Description',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'preparation_time',
		        'label' => 'Preparation time',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'cooking_time',
		        'label' => 'Cooking time',
		        'rules' => 'required'
		     ),
	    array(
		        'field' => 'serves',
		        'label' => 'Serves',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'ingredients',
		        'label' => 'Ingredients',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'procedures',
		        'label' => 'Procedures',
		        'rules' => 'required'
		     )
			 
		)
);
