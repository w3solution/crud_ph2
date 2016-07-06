<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/Controller/ProdutosController.php');

if (!empty($_POST['titulo'])) {
	$Produto = new ProdutosController();
    echo $Produto->adicionar();
    return;
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="text" name="titulo">
	<input type="submit">
</form>