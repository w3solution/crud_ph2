<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/Controller/ProdutosController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/Config/config.php');

$id = $_GET['produto_id'];

if (!empty($_POST['titulo'])) {
	$Produto = new ProdutosController();
    echo $Produto->editar($id);
    return;
}

if(isset($_GET['produto_id'])) {
	$Produto = new ProdutosController();
	$id = $_GET['produto_id'];
	extract($Produto->listProdutoId($id));	
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?produto_id=' . $id;?>" method="POST">
	<input type="text" name="titulo">
	<input type="submit">
</form>