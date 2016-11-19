<?
class Controller_Goods extends Controller
{
	protected $res;
	function __construct($db)
	{
		parent::__construct();
		$this->model = new Model_Goods($db);
	}

	function action_index (){
		$this->res = $this->model->getAllGoods();
		$this->view->generate('goods_view.php', 'template_view.php',$this->res);
	}

	function action_edit (){
		$this->res = $this->model->getGoodById();
		$this->view->generate('good_view_edit.php', 'template_view.php',$this->res);
	}

	function action_editGood (){
		$this->model->editGoodById();
		$this->res = $this->model->getAllGoods();
		$this->view->generate('goods_view.php', 'template_view.php',$this->res);
	}

	function action_add (){
		$this->view->generate('good_view_add.php', 'template_view.php');	
	}

		function action_del (){
		$this->model->delGoodById();	
	}

	//Добавление товара в базу
	function action_addgood (){
		$addgood = $this->model->addGood();
		if($addgood){
			$this->view->generate('good_view_add.php', 'template_view.php','Товар добавлен');
		}else{
			$this->view->generate('good_view_add.php', 'template_view.php','Товар не добавлен');
		}
	}
}