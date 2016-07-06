<?php

require 'Controller/ProdutosController.php';

$teste = new ProdutosController();

if(isset($_POST['sdelete'])) {

	$id = $_GET['produto_id'];
	$teste->delete($id);
	// header("Location: delete.php?deleted");	
}

?>

<a href="View/Usuarios/adicionar.php">Adicionar</a>
<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Descrição</th>
			<th>Created</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
		echo "<pre>";
		var_dump($teste->listagem());
		echo "</pre>";

		foreach ($teste->listagem() as $produto):

			$id = stripslashes($produto['id']);
			$titulo = stripslashes($produto['titulo']);
			$descricao = stripslashes($produto['descricao']);
			$file = stripslashes($produto['file']);
			$modified = stripslashes($produto['modified']);
			$created = stripslashes($produto['created']);
		?>
		<tr>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?produto_id=' . $id;?>">
			<th><a href="<?php echo '/View/Usuarios/editar.php?produto_id=' . $id ?>"><?=$id?></a></th>
			<th><a href="<?php echo '/View/Usuarios/editar.php?produto_id=' . $id ?>"><?=$titulo?></a></th>
			<th><?=$descricao?></th>
			<th><?=$created?></th>
			<th><input type="submit" name="sdelete" value="Delete"></th>
			</form>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
