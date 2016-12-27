<?php

class DB
{
	protected $host 	= 'localhost';
	protected $user 	= 'root';
	protected $pass 	= '';
	protected $dbname 	= 'blog';

	function __construct()
	{
		mysql_connect($this->host,$this->user,$this->pass)or die("Unable to connect server");
		mysql_select_db($this->dbname)or die("Unable to connect database");
	}

}