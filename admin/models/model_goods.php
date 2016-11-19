<?
class Model_Goods extends Model
{
	protected $query;
	protected $res;
	function __construct($db){
		parent::__construct($db);
	}

	function getAllGoods (){
		$this->query = "SELECT `id_good`, `nameGood`, `imgGood` FROM `goods`";
		$this->res = $this->db->makeQuery($this->query);
		return $this->res;
	}
	function getGoodById(){
		$this->query = "SELECT * FROM `goods` WHERE `id_good` =". $_GET["id"];
		$this->res = $this->db->makeQuery($this->query);
		return $this->res;
	}
	function addGood(){
		$nameGood = CutTegs($_POST['nameGood']);
		$mediaLinkVideo = CutTegs($_POST['mediaLinkVideo']);
		$mediaLinkDemo = CutTegs($_POST['mediaLinkDemo']);
		$imgGood = CutTegs($_POST['imgGoodMain']);
		$sticker = CutTegs($_POST['sticker']);
		$endingGood = CutTegs($_POST['endingGood']);
		$raiting = CutTegs($_POST['raiting']);
		$description = CutTegs($_POST['description']);
		$price = CutTegs($_POST['price']);
		$this->query = "INSERT INTO `goods`(`description`,`raiting`, `endingGood`, `price`, `imgGood`, `mediaLinkVideo`, `mediaLinkDemo`, `nameGood`) VALUES ('$description','$raiting', '$endingGood', $price, '$imgGood', '$mediaLinkVideo', '$mediaLinkDemo', '$nameGood')";
		$this->res = $this->db->makeQuery($this->query);
		$id = mysqli_insert_id($this->db->dbc);
		$alias = rus2translit($nameGood)._.$id;
		$realRoute = "/goods/add?id=".$id;
		$this->query = "INSERT INTO `Routes` (`alias` ,`realRoute`) VALUES ('$alias', '$realRoute')";
		$this->res = $this->db->makeQuery($this->query);
		if ($this->res === true){
			return true;
		}else{
			return false;
		}
	}	
	function editGoodById(){
		$id = $_GET['id'];
		$nameGood = CutTegs($_POST['nameGood']);
		$mediaLinkVideo = CutTegs($_POST['mediaLinkVideo']);
		$mediaLinkDemo = CutTegs($_POST['mediaLinkDemo']);
		$imgGood = CutTegs($_POST['imgGood']);
		$sticker = CutTegs($_POST['sticker']);
		$endingGood = CutTegs($_POST['endingGood']);
		$raiting = CutTegs($_POST['raiting']);
		$description = CutTegs($_POST['description']);
		$price = CutTegs($_POST['price']);
		$this->query = "UPDATE `goods` SET `description`= '$description',`endingGood`= '$endingGood',`raiting`= '$raiting',`price`= $price,`imgGood`= '$imgGood',`mediaLinkVideo`= '$mediaLinkVideo',`mediaLinkDemo`= '$mediaLinkDemo',`nameGood`= '$nameGood' WHERE  `id_good`= $id";
		$this->res = $this->db->makeQuery($this->query);
	}

	function delGoodById(){
		$id = $_GET['id'];
		$this->query = "SELECT `id_good`, `nameGood`, `price` FROM `goods` WHERE `id_good`=$id";
		$this->res = $this->db->makeQuery($this->query);
		var_dump($this->res);
		$id_good = $this->res[0]['id_good'];
		$nameGood = $this->res[0]['nameGood'];
		$price = $this->res[0]['price'];

		$this->query = "INSERT INTO `goodsDel`(`id_good`, `nameGood`, `price`) VALUES ('$id_good', '$nameGood', '$price')";
		$this->db->makeQuery($this->query);
		$this->query = "DELETE FROM `goods` WHERE `id_good` = $id";
		$this->db->makeQuery($this->query);
	}

}