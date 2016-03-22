<?php
require_once(LIB_PATH.DS."database.php");

class User extends DatabaseObject {

	static protected $table_name = "user";
	public $id;
	public $username;
	public $first_name;
	public $last_name;
	public $password;
	public $status;
	public $created_on;
	public $note;
	public $profession;

	public $middle_name;
	public $phone;
	public $university;
	public $interests1;
	public $interests2;
	public $insta;
	public $food;
	public $knowus;
	public $ques;
	public $social1;
	public $social2;
	
	protected static $db_fields = array('username' , 'id' , 'first_name' , 
										'last_name' , 'password','status',
										'created_on','note','profession',
										'middle_name','phone','university','insta',
										'interests1','interests2',
										'food','knowus','ques','social1','social2'
										);

	public function full_name(){
		if(isset($this->first_name) && isset($this->last_name)){
			return $this->first_name." ".$this->last_name;
		}else{
			return "";
		}
	}

	static public function authenticate($user="",$pass=""){
		global $database;
		$user = $database->escape_value($user);
		$pass = $database->escape_value($pass);
		$query = "SELECT * FROM user ";
		$query .= "WHERE username = '{$user}' AND password = '{$pass}' LIMIT 1";
		$user = static::find_by_sql($query);
		return !empty($user) ? array_shift($user) : false ;
	}

	static public function table_name(){
		return self::$table_name;
	}
	public function save(){
		if(isset($this->id)){
			return $this->update() ? true : false;
		}else{
			return $this->create() ? true : false;
		}
	}

	public static function findByUsername($username = null){
		if(!empty($username)){
			global $database;
			$user = $database->escape_value($username);
			$query = "SELECT * FROM user ";
			$query .= "WHERE username = '{$user}' LIMIT 1";
			$user = static::find_by_sql($query);
			return !empty($user) ? array_shift($user) : false ;
		}
		return false;
	}

}


?>