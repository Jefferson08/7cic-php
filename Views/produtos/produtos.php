<?php 
	
	require_once '../../DAO/ConexaoDAO.php';
	require_once '../../DAO/ProdutosDAO.php';

	$prodDAO = new ProdutosDAO();


	if (isset($_GET['html_busca'])) {
		$nome = $_GET['html_busca'];
		$produtos = $prodDAO->listarProdutos(1, $nome);
	} else {
		$produtos = $prodDAO->listarProdutos(0, "");
	}

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
		        <a class="nav-link" href="produtos.php">Produtos</a>
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

		

		<div class="row">
			<div class="col-sm-6"><a href="cadastrarProduto.php" class="btn btn-success">Cadastrar Produto</a></div>

			<div class="col-sm-6">
				<div class="form-inline float-right">
					<form method="GET" action="produtos.php">
						<div class="form-group">
							<input class="form-control" type="text" name="html_busca" placeholder="Buscar produto...">&nbsp;
							<input class="btn btn-primary" type="submit" value="Buscar">
						</div>
					</form>
				</div>
			</div>
		</div>

		<hr>

		<table class="table table-bordered text-center" border=1>
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Supplier</th>
					<th>Category</th>
					<th>Quantity Per Unit</th>
					<th>Unity Price</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($produtos as $produto): ?>
					<tr>
						<td><?php echo $produto->getProductName(); ?></td>
						<td><?php echo $produto->getFornecedor(); ?></td>
						<td><?php echo $produto->getCategoria(); ?></td>
						<td><?php echo $produto->getQtdPerUnit(); ?></td>
						<td><?php echo $produto->getUnitPrice(); ?></td>
						<td style="width: 300px;">
							<a href="detalhesProduto.php?cod=<?php echo $produto->getProductId(); ?>" class="btn btn-secondary">Detalhes</a>
							<a href="alterarProduto.php?cod=<?php echo $produto->getProductId(); ?>" class="btn btn-primary">Editar</a>
							<a href="excluirProduto.php?cod=<?php echo $produto->getProductId(); ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir o produto <?php echo $produto->getProductName(); ?> ?')">Excluir</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php
	
 ?>