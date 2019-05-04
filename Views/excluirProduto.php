<?php 
	require_once '../DAO/ProdutosDAO.php';

	$prodDAO = new ProdutosDAO();

	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$prodDAO->excluirProduto($cod);

		header("Location: produtos.php");
	} else {
		echo "Código inválido";
	}
 ?>