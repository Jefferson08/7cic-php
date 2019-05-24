<?php 
	
	require_once '../../DAO/FornecedoresDAO.php';
	require_once '../../models/Fornecedores.php';

	$cod = $_GET['cod'];

	$fornDAO = new FornecedoresDAO();

	$forn=$fornDAO->carregarFornecedor($cod);

	if (isset($_POST['acao'])) {
		
		$fornecedor = new Fornecedores();

		$nome = $_POST['companyName'];
		$nome_contato = $_POST['contactName'];
		$titulo_contato = $_POST['contactTitle'];
		$endereco = $_POST['address'];
		$telefone = $_POST['phone'];

		$fornecedor->setSupplierID($cod);
		$fornecedor->setCompanyName($nome);
		$fornecedor->setContactName($nome_contato);
		$fornecedor->setContactTitle($titulo_contato);
		$fornecedor->setAddress($endereco);
		$fornecedor->setPhone($telefone);



		$fornDAO->alterarFornecedor($fornecedor);

		echo "<script>alert('Fornecedor alterado com sucesso!!!')</script>";

		echo "<script>location.href='fornecedores.php'</script>";


	}
 ?>

 <div class="container">

 	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

	<hr>

	<h1>Alterar Fornecedor</h1><hr>

	<div class="form">
		<form action="alterarFornecedor.php?cod=<?php echo $forn->getSupplierID(); ?>" method="POST">

			<div class="form-group">
				<label for="">Nome do Fornecedor:</label>
				<input type="text" name="companyName" id="companyName" class="form-control" aria-describedby="helpId" value="<?php echo $forn->getCompanyName(); ?>">
			</div>

			<div class="form-group">
				<label for="">Nome do contato:</label>
				<input type="text" name="contactName" id="contactName" class="form-control" aria-describedby="helpId" value="<?=$forn->getContactName(); ?>">
			</div>

			<div class="form-group">
				<label for="">Título do contato:</label>
				<input type="text" name="contactTitle" id="contactTitle" class="form-control" aria-describedby="helpId" value="<?=$forn->getContactTitle(); ?>">
			</div>

			<div class="form-group">
				<label for="">Endereço:</label>
				<input type="text" name="address" id="address" class="form-control" aria-describedby="helpId" value="<?=$forn->getAddress(); ?>">
			</div>

			<div class="form-group">
				<label for="">Telefone:</label>
				<input type="text" name="phone" id="phone" class="form-control" aria-describedby="helpId" value="<?=$forn->getPhone(); ?>">
			</div>

			<div class="form-group">
			  <input type="hidden" name="acao" value="1">
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>
		</form>
	</div>

</div>