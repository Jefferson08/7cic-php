<?php 
	
	require_once '../DAO/FornecedoresDAO.php';
	require_once '../models/Fornecedores.php';

	$fornDAO = new FornecedoresDAO();

	if (!isset($_GET['acao'])) {
		?>
			<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

			<div class="container">

				<hr>

				<h1>Cadastrar fornecedor</h1><hr>

				<div class="form">
					<form action="cadastrarFornecedor.php" method="GET">

						<div class="form-group">
							<label for="">Nome do fornecedor</label>
							<input type="text" name="companyName" id="" class="form-control" placeholder="Digite o nome do fornecedor" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Nome do contato</label>
							<input type="text" name="contactName" id="" class="form-control" placeholder="Digite o nome do contato" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Título do contato</label>
							<input type="text" name="contactTitle" id="" class="form-control" placeholder="Digite o endereço" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Endereço</label>
							<input type="text" name="address" id="" class="form-control" placeholder="Digite o nome do fornecedor" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="">Telefone</label>
							<input type="text" name="phone" id="" class="form-control" placeholder="Digite o nome do fornecedor" aria-describedby="helpId">
						</div>

						<div class="form-group">
						  <input type="hidden" name="acao" value="1">
						</div>

						<button type="submit" class="btn btn-success">Cadastrar fornecedor</button>
					</form>
				</div>

			</div>


		<?php
	} else {

		if (!empty($_GET['companyName'])) {
			$fornecedor = new Fornecedores();

			$nome = $_GET['companyName'];
			$nome_contato = $_GET['contactName'];
			$titulo_contato = $_GET['contactTitle'];
			$endereco = $_GET['address'];
			$telefone = $_GET['phone'];

			$fornecedor->setCompanyName($nome);
			$fornecedor->setContactName($nome_contato);
			$fornecedor->setContactTitle($titulo_contato);
			$fornecedor->setAddress($endereco);
			$fornecedor->setPhone($telefone);

			$fornDAO = new FornecedoresDAO();

			$fornDAO->cadastrarFornecedor($fornecedor);

			echo "<script>alert('Fornecedor cadastrado!!'); location.href='fornecedores.php';</script>";

		} else {
			echo "<script>alert('Nome do fornecedor não pode ser vazio!!!');</script>";
			echo "<script>location.href='cadastrarFornecedor.php'</script>";
		}

	}

 ?>

