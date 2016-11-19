<?
class Controller_Users extends Controller
{
	protected $res;
	function __construct($db)
	{
		parent::__construct();
		$this->model = new Model_Users($db);
	}

	function action_index (){
		//$this->res = $this->model->getAllUsers();
		$this->view->generate('users_view.php', 'template_view.php');
	}
	function action_add(){
		$this->view->generate('users_view_add.php', 'template_view.php');
	}
}