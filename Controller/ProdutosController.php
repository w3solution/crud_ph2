<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/Controller/AppController.php');

class ProdutosController extends AppController{

	public function listProdutoId($id)
	{
		// $stmt = $this->db->prepare("SELECT * FROM produtos WHERE id=:id");
		// $stmt->execute(array(":id"=>$id));
		// $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		// return $editRow;
	}

	public function listagem() {

		$listProdutos = mysql_query('SELECT * FROM produtos');

		while($row = mysql_fetch_assoc($listProdutos)){
			$rows[] = $row;
		}

		return $rows;

	}

	public function adicionar() {

		$titulo = $_POST['titulo'];

		try {
			$adicionaProduto = mysql_query("INSERT INTO produtos(titulo) VALUES('$titulo')");
			return $adicionaProduto;
		}
		catch(PDOException $e) {
			echo $e->getMessage();	
			return false;
		}


	}

	public function editar($id) {

		$titulo = $_POST['titulo'];

		try {
			$editarProduto = mysql_query("UPDATE produtos SET titulo='$titulo'
													WHERE id='$id' ");
			return $editarProduto;
		}
		catch(PDOException $e) {
			echo $e->getMessage();	
			return false;
		}

	}

	public function delete($id) {

		$deleteProduto = mysql_query("DELETE FROM produtos WHERE id='$id'");
		return $deleteProduto;

	}

}