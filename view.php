<?php 
	
	require_once 'DAO/ConexaoDAO.php';
	require_once 'DAO/ProdutosDAO.php';

	$prodDAO = new ProdutosDAO();

	$produtos = $prodDAO->listarProdutos();

	?>

	<table border=1>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Quantidade por unidade</th>
				<th>Preço unitário</th>
				<th>Categoria</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($produtos as $produto): ?>
				<tr>
					<td><?php echo $produto->getProductName(); ?></td>
					<td><?php echo $produto->getQdtPerUnity(); ?></td>
					<td><?php echo $produto->getUniPrice(); ?></td>
					<td><?php echo $produto->getCategory(); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php
	
 ?>