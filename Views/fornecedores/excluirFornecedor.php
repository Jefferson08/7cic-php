<?php 
	require_once '../../DAO/FornecedoresDAO.php';

	$fornDAO = new FornecedoresDAO();

	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$fornDAO->excluirFornecedor($cod);

		echo "<script>alert('Fornecedor excluído com sucesso!!!'); location.href='fornecedores.php';</script>";

	} else {
		echo "Código inválido";
	}
 ?>