<?php 

	require_once '../../models/Funcionarios.php';
	require_once '../../DAO/funcionariosDAO.php';
	

	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$funcionario = new Funcionarios();

		$funcDAO = new FuncionariosDAO();

		$funcionario=$funcDAO->carregarFuncionario($cod);

	} else {
		echo "<script>location.href='produtos.php'</script>";
	}
 ?>

 <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

 <div class="container-fluid">
 			
	<hr>
	<h2 class="text-center">Detalhes Funcionário:</h2>
	<hr>

	<div class="row">
		<div class="col-sm-6">
			<ul class="list-group">
		  <li class="list-group-item">
		  		<h5>Nome:</h5><hr>
		  		<?php echo $funcionario->getFirstName(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Sobrenome:</h5><hr>
		  		<?php echo $funcionario->getLastName(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Endereço:</h5><hr>
		  		<?php echo $funcionario->getAddress(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Título:</h5><hr>
		  		<?php echo $funcionario->getTitle(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Cidade:</h5><hr>
		  		<?php echo $funcionario->getCity(); ?>
		  </li>
		</ul>
		</div>
		
		<div class="col-sm-6">
			<ul class="list-group">
		  <li class="list-group-item">
		  		<h5>Região:</h5><hr>
		  		<?php echo $funcionario->getRegion(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Código Postal:</h5><hr>
		  		<?php echo $funcionario->getPostalCode(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>País:</h5><hr>
		  		<?php echo $funcionario->getCountry(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Telefone Residencial:</h5><hr>
		  		<?php echo $funcionario->getHomePhone(); ?>
		  </li>
		  
		</ul>
		</div>
	</div>
</div>