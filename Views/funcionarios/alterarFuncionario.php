<?php 
	
	require_once '../../DAO/FuncionariosDAO.php';
	require_once '../../models/Funcionarios.php';

	$cod = $_GET['cod'];

	$funDAO = new FuncionariosDAO();

	$func=$funDAO->carregarFuncionario($cod);

	if (isset($_POST['acao'])) {
		
		$funcionario = new Funcionarios();

		$name = $_POST['firstName'];
		$sobrenome = $_POST['lastName'];
		$title = $_POST['title'];
		$address = $_POST['address'];
		$city = $_POST['city'];

		$funcionario->setEmployeeID($cod);
		$funcionario->setFirstName($name);
		$funcionario->setLastName($sobrenome);
		$funcionario->setTitle($title);
		$funcionario->setAddress($address);
		$funcionario->setCity($city);

		$funDAO->alterarFuncionario($funcionario);

		echo "<script>alert('Funcionário alterado com sucesso!!!')</script>";

		echo "<script>location.href='funcionarios.php'</script>";


	}
 ?>

 <div class="container">

 	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

	<hr>

	<h1>Alterar Funcionario</h1><hr>

	<div class="form">
		<form action="alterarFuncionario.php?cod=<?php echo $func->getEmployeeID(); ?>" method="POST">

			<div class="form-group">
				<label for="">Nome do funcionario</label>
				<input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $func->getFirstName(); ?>" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="">Sobrenome:</label>
				<input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $func->getLastName(); ?>" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="">Título</label>
				<input type="text" name="title" id="title" class="form-control" value="<?php echo $func->getTitle(); ?>" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="">Endereço:</label>
				<input type="text" name="address" id="address" class="form-control" value="<?php echo $func->getAddress(); ?>" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="">Cidade:</label>
				<input type="text" name="city" id="city" class="form-control" value="<?php echo $func->getCity(); ?>" aria-describedby="helpId">
			</div>
			
			<div class="form-group">
			  <input type="hidden" name="acao" value="1">
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>
		</form>
	</div>

</div>