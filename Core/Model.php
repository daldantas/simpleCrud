<?php
class Model
{
	private $host 	= "localhost";
	private $user	= "root";
	private $pass 	= "";
	private $db		= "simpleCrud";
	private $mysqli;

	public function execute($q)
	{
		$this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
		return $this->mysqli->query($q);
		$this->mysqli->close();
	}
}
?>