<?php 
namespace Engine\Core\Database;
use \PDO;
class Connection
{
	private $link;
	
	function __construct()
	{
		$this->connect();
	}
	function connect(){
		$config = require_once ROOT_PATH . '/engine/Config/Database.php';
		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config["charset"];
		$this->link = new PDO($dsn, $config["user"], $config["password"]);
		return $this;
	}
	function execute($sql, $parameters = []){
		$req = $this->link->prepare($sql);
		$req->execute($parameters);
		return $this->link->lastInsertId();
    }
	function query($sql, $parameters = []){
		$req = $this->link->prepare($sql);
		$req->execute($parameters);
		$resp = $req->fetchAll(PDO::FETCH_CLASS);
		if ($resp === false) {
			return [];
		}
		return $resp;
	}

}
 ?>