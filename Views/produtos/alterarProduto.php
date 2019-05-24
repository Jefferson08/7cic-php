<?php 
	require_once '../../models/Produtos.php';
	require_once '../../DAO/ProdutosDAO.php';
	require_once '../../DAO/CategoriasDAO.php';
	require_once '../../DAO/FornecedoresDAO.php';

	$cod = $_GET['cod'];

	$prod = new Produtos();

	$prodDAO = new ProdutosDAO();
	$catDAO = new CategoriasDAO();
	$fornDAO = new FornecedoresDAO();

	$categorias = $catDAO->listarCategorias();
	$fornecedores = $fornDAO->listarFornecedores();

	$prod=$prodDAO->carregarProduto($cod);

	if (isset($_POST['acao'])) {
		
		$produto = new Produtos();

		$nome = $_POST['productName'];
		$fornecedor = $_POST['supplier'];
		$categoria = $_POST['category'];
		$quantidade = $_POST['qtdPerUnit'];
		$preco = $_POST['unitPrice'];

		$produto->setProductId($cod);
		$produto->setProductName($nome);
		$produto->setSupplierID($fornecedor);
		$produto->setCategoryID($categoria);
		$produto->setQtdPerUnit($quantidade);
		$produto->setUnitPrice($preco);

		$prodDAO = new ProdutosDAO();

		$prodDAO->alterarProduto($produto);

		echo "<script>alert('Produto alterado com sucesso!!!')</script>";

		echo "<script>location.href='produtos.php'</script>";


	}
 ?>

 <div class="container">

 	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

	<hr>

	<h1>Alterar Produto</h1><hr>

	<div class="form">
		<form action="alterarProduto.php?cod=<?php echo $prod->getProductId(); ?>" method="POST">

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="productName" id="productName" class="form-control" aria-describedby="helpId" value="<?=$prod->getProductName(); ?>">
			</div>

			<div class="form-group">
				<label for="supplier">Supplier</label>
				<select class="custom-select" name="supplier" id="supplier">	

					<option value="<?php echo $prod->getSupplierID(); ?>" selected="selected">
						<?php echo $prod->getFornecedor(); ?>
					</option>

					<?php foreach ($fornecedores as $fornecedor) {
						?>
							<option value="<?php echo $fornecedor->getSupplierID(); ?>"><?php echo $fornecedor->getCompanyName(); ?></option>
						<?php
					} ?>
				</select>
			</div>

			<div class="form-group">
				<label for="category">Category</label>
				<select class="custom-select" name="category" id="category">

					<option value="<?php echo $prod->getCategoryID(); ?>">
						<?php echo $prod->getCategoria(); ?>
					</option>

					<?php foreach ($categorias as $categoria) {
						?>
							<option value="<?php echo $categoria->getCategoryID(); ?>"><?php echo $categoria->getCategoryName(); ?></option>
						<?php
					} ?>
				</select>
			</div>

			<div class="form-group">
			  <label for="qtdPerUnit">Quantity per unit</label>
			  <input type="text" name="qtdPerUnit" id="qtdPerUnit" class="form-control" aria-describedby="helpId" value="<?php echo $prod->getQtdPerUnit(); ?>">
			</div>

			<div class="form-group">
			  <label for="">Unit Price</label>
			  <input type="text" name="unitPrice" id="" class="form-control" placeholder="Type unit price" aria-describedby="helpId" value="<?php echo $prod->getUnitPrice(); ?>">
			</div>

			<div class="form-group">
			  <input type="hidden" name="acao" value="1">
			</div>

			<button type="submit" class="btn btn-success">Salvar</button>
		</form>
	</div>

</div>