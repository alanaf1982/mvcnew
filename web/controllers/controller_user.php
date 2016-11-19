<?php

class Controller_User extends Controller
{
	function __construct($db)
	{
		parent::__construct($db);
		$this->model = new Model_User($db);
	}


	function action_index()
	{	
		$this->view->generate('sign_view.php', 'template_view.php');
	}

	function action_auth()
	{	
		if($this->model->authUser()){
			$_SESSION["auth"] = true;
			header("location: /");
		}else{
			$_SESSION["auth"] = false;
			header("location: /registration.php");
		}
	}

	function action_reg()
	{	
		$reg = $this->model->regUser();
		//var_dump($reg);
		if($reg){
			$_SESSION["auth"] = $reg;
			header("location: /");
		}else{
			$_SESSION["auth"] = $reg;
			header("location: /registration.php");
		}
	}

	function action_exit()
	{	
		$_SESSION["auth"] = false;
		$_SESSION["id_user"] = false;
		header("location: /");
	}

	function action_profile()
	{	

		$data = $this->model->profileUser();
		$this->view->generate('profile_view.php', 'template_view.php', $data);

	}
		function action_edit()
	{
		$this->model->editUser();
		header("location: /");
	}
}