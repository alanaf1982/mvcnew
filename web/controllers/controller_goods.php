<?
	class Controller_Goods extends Controller
	{
		protected $res;
		function __construct($db)
		{
			parent::__construct($db);
			$this->model = new Model_Goods($db);
		}


		function action_index()
		{	
			$this->res = $this->model->getAllGoods();
			$this->view->generate('goods_view.php', 'template_view.php', $this->res);
		}
		function action_good()
		{	
			$this->res = $this->model->getGood();
			$this->view->generate('good_view.php', 'template_view.php', $this->res);
		}

	}
?>