<?php 

	require_once '../../models/Produtos.php';
	require_once '../../DAO/ProdutosDAO.php';
	require_once '../../DAO/CategoriasDAO.php';
	require_once '../../DAO/FornecedoresDAO.php';


	if (isset($_GET['cod']) && !empty($_GET['cod'])) {
		$cod = $_GET['cod'];

		$produto = new Produtos();

		$prodDAO = new ProdutosDAO();
		$catDAO = new CategoriasDAO();
		$fornDAO = new FornecedoresDAO();

		$categorias = $catDAO->listarCategorias();
		$fornecedores = $fornDAO->listarFornecedores();

		$produto=$prodDAO->carregarProduto($cod);

	} else {
		echo "<script>location.href='produtos.php'</script>";
	}
 ?>

 <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

 <div class="container-fluid">
 			
	<hr>
	<h2 class="text-center">Detalhes Produto:</h2>
	<hr>

	<div class="row">
		<div class="col-sm-6">
			<ul class="list-group">
		  <li class="list-group-item">
		  		<h5>Nome:</h5><hr>
		  		<?php echo $produto->getProductName(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Categoria:</h5><hr>
		  		<?php echo $produto->getCategoria(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Fornecedor:</h5><hr>
		  		<?php echo $produto->getFornecedor(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Quantidade por unidade:</h5><hr>
		  		<?php echo $produto->getQtdPerUnit(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Preço unitário:</h5><hr>
		  		<?php echo $produto->getUnitPrice(); ?>
		  </li>
		</ul>
		</div>
		
		<div class="col-sm-6">
			<ul class="list-group">
		  <li class="list-group-item">
		  		<h5>Unidades no estoque:</h5><hr>
		  		<?php echo $produto->getUnitsInStock(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Unidades no pedido:</h5><hr>
		  		<?php echo $produto->getUnitsOnOrder(); ?>
		  </li>
		  <li class="list-group-item">
		  		<h5>Nível de Re-Ordem:</h5><hr>
		  		<?php echo $produto->getReorderLevel(); ?>
		  </li>
		  
		</ul>
		</div>
	</div>
</div>