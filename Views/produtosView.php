<?php 
	
	require_once '../DAO/ConexaoDAO.php';
	require_once '../DAO/ProdutosDAO.php';

	$prodDAO = new ProdutosDAO();

	$produtos = $prodDAO->listarProdutos();

	?>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

	<div class="container">
		<hr>

		<table class="table table-bordered" border=1>
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Supplier</th>
					<th>Category</th>
					<th>Quantity Per Unit</th>
					<th>Unity Price</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($produtos as $produto): ?>
					<tr>
						<td><?php echo $produto->getProductName(); ?></td>
						<td><?php echo $produto->getFornecedor(); ?></td>
						<td><?php echo $produto->getCategoria(); ?></td>
						<td><?php echo $produto->getQdtPerUnity(); ?></td>
						<td><?php echo $produto->getUnitPrice(); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php
	
 ?>