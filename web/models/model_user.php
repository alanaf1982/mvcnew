<?
class Model_User extends Model
{
	protected $login;
	protected $passwd;
	protected $email;
	protected $query;
	protected $valid;
	protected $res;
	protected $name;
	protected $fame;
	protected $fone;
	protected $city;
	protected $id_user;
	protected $remember;
	public function __construct($db){

		parent::__construct($db);
		if(clearRequest($_POST['reg'])){
			//Валидация
			$this->login = clearRequest($_POST['login']);
			$this->passwd = clearRequest($_POST['passwd']);
			$this->email = clearRequest($_POST['email']);

			$this->valid = Validation::checkAllFields(["login"=>$this->login, "passwd"=>$this->passwd, "email"=>$this->email]);
			if (!$this->valid){
				die();
			}
			$this->login = mysqli_real_escape_string($this->db->dbc, $this->login);
			$this->passwd = mysqli_real_escape_string($this->db->dbc, $this->passwd);
			$this->email = mysqli_real_escape_string($this->db->dbc, $this->email);
			$this->passwd = password_hash($this->passwd, PASSWORD_DEFAULT);
		}

		 //Авторизация

		if(clearRequest($_POST['auth'])){
			//Валидация
			$this->login = clearRequest($_POST['login']);
			$this->passwd = clearRequest($_POST['passwd']);
			$this->remember = clearRequest($_POST['remember']);
		}
		if(clearRequest($_POST['edit'])){
			//Валидация
			$this->name = clearRequest($_POST['name']);
			$this->fname = clearRequest($_POST['fname']);
			$this->email = clearRequest($_POST['email']);
			$this->fone = clearRequest($_POST['fone']);
			$this->city = clearRequest($_POST['city']);
			$this->name = mysqli_real_escape_string($this->db->dbc, $this->name);
			$this->fname = mysqli_real_escape_string($this->db->dbc, $this->fname);
			$this->email = mysqli_real_escape_string($this->db->dbc, $this->email);
			$this->fone = mysqli_real_escape_string($this->db->dbc, $this->fone);
			$this->city = mysqli_real_escape_string($this->db->dbc, $this->city);
		}
	}
	public function regUser(){
		if($this->db->makeQuery("SELECT `id` FROM `Users` WHERE `login`='$this->login'") === array() && $this->db->makeQuery("SELECT `id` FROM `Users` WHERE `email`='$this->email'") === array()){

			$this->query = "INSERT INTO Users(`login`, `passwd`, `email`) VALUES ('$this->login','$this->passwd','$this->email')";
		 	$this->db->makeQuery($this->query);
		 	$_SESSION["id_user"] = mysqli_insert_id($this->db->dbc);
			return true;

		}else{

			return false;
		}

	}
	public function authUser(){
		$this->query = "SELECT `id`,`login`, `passwd` FROM `Users` WHERE `login`='$this->login'";
		$this->data = $this->db->makeQuery($this->query);
		if(password_verify($this->passwd, $this->data[0]['passwd'])){
			$user_id = $_SESSION["id_user"] = $this->data[0]['id'];
			if ($this->remember === 'on') {
				$hash = md5(time());
				setcookie('remember', $hash, time()+3600*24*30,'/');
				$this->query = "INSERT INTO Remember(`hash`, `user_id`, `time`) VALUES ('$hash, $user_id, time())";
				$this->db->makeQuery($this->query);
			}
			return true;
		}else false;
	}
	public function profileUser(){ 

		$this->id_user = $_SESSION["id_user"];
		$this->query = "SELECT * FROM `Users` WHERE `id`='$this->id_user'";
		$this->data = $this->db->makeQuery($this->query);
		return $this->data;
	}	
	public function editUser(){
		$this->id_user = clearRequest($_SESSION["id_user"]);
		$this->query = "UPDATE `Users` SET `name`='$this->name',`fname`='$this->fname',`fone`='$this->fone',`city`='$this->city' WHERE `id`='$this->id_user'";
		$this->db->makeQuery($this->query);
	}
		
}
?>