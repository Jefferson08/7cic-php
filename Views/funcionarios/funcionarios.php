<?php 
	
	require_once '../../DAO/ConexaoDAO.php';
	require_once '../../DAO/FuncionariosDAO.php';

	$funDAO = new FuncionariosDAO();

	$funcionarios = $funDAO->listarFuncionarios();

	?>

	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="">7CIC 2019.1 - PHP</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="../produtos/produtos.php">Produtos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../fornecedores/fornecedores.php">Fornecedores</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../Funcionarios/funcionarios.php">Funcionários</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<hr>

		<a href="cadastrarFuncionario.php" class="btn btn-success">Cadastrar Funcionario</a>

		<hr>

		<table class="table table-bordered text-center" border=1>
			<thead>
				<tr>
					<th>Name</th>
					<th>Title</th>
					<th>Address</th>
					<th>City</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($funcionarios as $funcionario): ?>
					<tr>
						<td><?php echo $funcionario->getFirstName(); ?></td>
						<td><?php echo $funcionario->getTitle(); ?></td>
						<td><?php echo $funcionario->getAddress(); ?></td>
						<td><?php echo $funcionario->getCity(); ?></td>
						<td style="width: 300px;">
							<a href="detalhesFuncionario.php?cod=<?php echo $funcionario->getEmployeeID(); ?>" class="btn btn-secondary">Detalhes</a>
							<a href="alterarFuncionario.php?cod=<?php echo $funcionario->getEmployeeID(); ?>" class="btn btn-primary">Editar</a>
							<a href="excluirFuncionario.php?cod=<?php echo $funcionario->getEmployeeID(); ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o funcionario <?php echo $funcionario->getFirstName(); ?> ?')">Excluir</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php
	
 ?>