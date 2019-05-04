<?php 
	
	require_once '../DAO/ConexaoDAO.php';
	require_once '../DAO/FornecedoresDAO.php';

	$fornDAO = new FornecedoresDAO();

	$fornecedores = $fornDAO->listarFornecedores();

	?>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="">7CIC 2019.1 - PHP</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="produtos.php">Produtos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="fornecedores.php">Fornecedores</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<hr>

		<a href="cadastrarFornecedor.php" class="btn btn-success">Cadastrar Fornecedor</a>

		<hr>

		<table class="table table-bordered text-center" border=1>
			<thead>
				<tr>
					<th>Company Name</th>
					<th>Contact Name</th>
					<th>Contact Title</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($fornecedores as $fornecedor): ?>
					<tr>
						<td><?php echo $fornecedor->getCompanyName(); ?></td>
						<td><?php echo $fornecedor->getContactName(); ?></td>
						<td><?php echo $fornecedor->getContactTitle(); ?></td>
						<td><?php echo $fornecedor->getAddress(); ?></td>
						<td><?php echo $fornecedor->getPhone(); ?></td>
						<td style="width: 300px;">
							<a href="detalhesFornecedor.php?cod=<?php echo $fornecedor->getSupplierId(); ?>" class="btn btn-secondary">Detalhes</a>
							<a href="#" class="btn btn-primary">Editar</a>
							<a href="#" class="btn btn-danger">Excluir</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php
	
 ?>