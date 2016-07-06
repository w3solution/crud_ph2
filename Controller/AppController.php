<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Config/config.php');

class AppController{

	function __construct() {

		$conn = new Conexao();

	}

}