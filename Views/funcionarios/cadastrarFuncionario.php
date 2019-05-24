<?php 
	
	require_once '../../DAO/FuncionariosDAO.php';
	require_once '../../models/Funcionarios.php';

	$funDAO = new Funcionarios();

	if (!isset($_GET['acao'])) {
		?>
			<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

			<div class="container">

				<hr>

				<h1>Cadastrar Funcionário</h1><hr>

				<div class="form">
					<form action="cadastrarFuncionario.php" method="GET">

						<div class="form-group">
							<label for="">Nome do funcionario</label>
							<input type="text" name="firstName" id="firstName" class="form-control" placeholder="Digite o nome do funcionario" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Sobrenome:</label>
							<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Digite o nome do funcionario" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Título</label>
							<input type="text" name="title" id="title" class="form-control" placeholder="Digite o titulo do funcionario" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Endereço:</label>
							<input type="text" name="address" id="address" class="form-control" placeholder="Digite o endereço do funcionário" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Cidade:</label>
							<input type="text" name="city" id="city" class="form-control" placeholder="Digite a cidade do funcionario" aria-describedby="helpId">
						</div>

						<div class="form-group">
						  <input type="hidden" name="acao" value="1">
						</div>

						<button type="submit" class="btn btn-success">Cadastrar funcionario</button>
					</form>
				</div>

			</div>


		<?php
	} else {

		if (!empty($_GET['firstName'])) {
			$funcionario = new Funcionarios();

			$name = $_GET['firstName'];
			$sobrenome = $_GET['lastName'];
			$title = $_GET['title'];
			$address = $_GET['address'];
			$city = $_GET['city'];
			
			$funcionario->setFirstName($name);
			$funcionario->setLastName($sobrenome);
			$funcionario->setTitle($title);
			$funcionario->setAddress($address);
			$funcionario->setCity($city);
			
			$funDAO = new FuncionariosDAO();

			$funDAO->cadastrarFuncionario($funcionario);

			echo "<script>alert('Funcionário cadastrado!!'); location.href='funcionarios.php';</script>";

		} else {
			echo "<script>alert('Nome do funcionario não pode ser vazio!!!');</script>";
			echo "<script>location.href='cadastrarFuncionario.php'</script>";
		}

	}

 ?>

