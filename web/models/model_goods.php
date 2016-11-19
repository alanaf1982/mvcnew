<?
	class Model_Goods extends Model
	{
		protected $query;
		protected $res;
		public function __construct($db)
		{
			parent::__construct($db);
		}

		function getAllGoods (){
			$this->query = "SELECT * FROM `goods`";
			$this->res = $this->db->makeQuery($this->query);
			return $this->res;
		}
		function getGood (){
			$routes= explode('?', $_SERVER['REQUEST_URI'])[0];
			$routes = explode('/', $routes);
			$alias_good = $routes[2];
			$this->query = "SELECT * FROM `goods` WHERE `alias` = '$alias_good'";
			$this->res = $this->db->makeQuery($this->query);
			return $this->res;
		}
	}
?>