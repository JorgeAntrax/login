<?php
	//conexion a base de datos
class Conexion extends mysqli
{
	public $sql;

	function __construct()
	{
		parent::__construct('127.0.0.2', 'root', '', 'xoolar');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error al conectarse con la base de datos') : '';
	}

	public function getQuery($sql)
	{
		$this->sql = $sql;
		$result = $this->query($this->sql);
		return $result;
	}

	public function getArray($sql)
	{
		$result = mysqli_fetch_array($this->getQuery($sql));
		return $result;
	}
	public function getAssoc($sql)
	{
		$result = mysqli_fetch_assoc($this->getQuery($sql));
		return $result;
	}

	public function setQuery()
	{

	}

	public function updateQuery()
	{

	}

	public function deleteQuery()
	{

	}

}

class Crypt
{
	private $key;

	function __construct($key)
	{
		$this->key = $key;
	}

	function encript($string)
	{
		$result = '';
		for ($i = 0; $i < strlen($string); $i++) {
			$caracter = substr($string, $i, 1);
			$caracterKey = substr($this->key, ($i % strlen($this->key)) - 1, 1);
			$caracter = chr(ord($caracter) + ord($caracterKey));

			$result .= $caracter;
		}
		return base64_encode($result);
	}

	function decript($string)
	{
		$result = '';
		$string = base64_decode($string);
		for ($i = 0; $i < strlen($string); $i++) {
			$caracter = substr($string, $i, 1);
			$caracterKey = substr($this->key, ($i % strlen($this->key)) - 1, 1);
			$caracter = chr(ord($caracter) - ord($caracterKey));

			$result .= $caracter;
		}
		return $result;
	}
}
?>