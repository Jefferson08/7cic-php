<?php 
	require_once '../DAO/ProdutosDAO.php';

	$prodDAO = new ProdutosDAO();

	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$prodDAO->excluirProduto($cod);

		echo "<script>alert('Produto excluído com sucesso!!!'); location.href='produtos.php';</script>";

	} else {
		echo "Código inválido";
	}
 ?>