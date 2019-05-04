<?php 
	
	require '../models/Produtos.php';
	require_once '../DAO/ProdutosDAO.php';
	require_once '../models/Categorias.php';
	require_once '../models/Fornecedores.php';
	require_once '../DAO/FornecedoresDAO.php';
	require_once '../DAO/CategoriasDAO.php';

	$catDAO = new CategoriasDAO();
	$fornDAO = new FornecedoresDAO();

	$categorias = $catDAO->listarCategorias();
	$fornecedores = $fornDAO->listarFornecedores();

	if (!isset($_GET['acao'])) {
		?>
			<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

			<div class="container">

				<hr>

				<h1>Cadastrar Produto</h1><hr>

				<div class="form">
					<form action="cadastrarProduto.php" method="GET">

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="productName" id="" class="form-control" placeholder="Digite o nome do produto" aria-describedby="helpId">
						</div>

						<div class="form-group">
							<label for="supplier">Supplier</label>
							<select class="custom-select" name="supplier" id="supplier">			
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
								<?php foreach ($categorias as $categoria) {
									?>
										<option value="<?php echo $categoria->getCategoryID(); ?>"><?php echo $categoria->getCategoryName(); ?></option>
									<?php
								} ?>
							</select>
						</div>

						<div class="form-group">
						  <label for="qtdPerUnit">Quantity per unit</label>
						  <input type="text" name="qtdPerUnit" id="qtdPerUnit" class="form-control" placeholder="Digite a quantidade por unidade" aria-describedby="helpId">
						</div>

						<div class="form-group">
						  <label for="">Unit Price</label>
						  <input type="text" name="unitPrice" id="" class="form-control" placeholder="Digite o preço unitário" aria-describedby="helpId">
						</div>

						<div class="form-group">
						  <input type="hidden" name="acao" value="1">
						</div>

						<button type="submit" class="btn btn-success">Cadastrar</button>
					</form>
				</div>

			</div>


		<?php
	} else {

		$produto = new Produtos();

		$nome = $_GET['productName'];
		$fornecedor = $_GET['supplier'];
		$categoria = $_GET['category'];
		$quantidade = $_GET['qtdPerUnit'];
		$preco = $_GET['unitPrice'];

		$produto->setProductName($nome);
		$produto->setSupplierID($fornecedor);
		$produto->setCategoryID($categoria);
		$produto->setQtdPerUnit($quantidade);
		$produto->setUnitPrice($preco);

		$prodDAO = new ProdutosDAO();

		$prodDAO->cadastrarProduto($produto);

		echo "<script>alert('Produto cadastrado com sucesso!!!'); location.href='produtos.php';</script>";

	}

 ?>

