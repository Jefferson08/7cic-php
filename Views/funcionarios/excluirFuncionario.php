<?php 
	require_once '../../DAO/FuncionariosDAO.php';

	$funDAO = new FuncionariosDAO();

	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$funDAO->excluirFuncionario($cod);

		echo "<script>alert('Funcionário excluído com sucesso!!!'); location.href='funcionarios.php';</script>";

	} else {
		echo "Código inválido";
	}
 ?>