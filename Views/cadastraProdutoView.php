
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<div class="container">

	<hr>

	<h1>Cadastrar Produto</h1><hr>

	<div class="form">
		<form action="" method="post">

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="productName" id="" class="form-control" placeholder="Type product name" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="supplier">Supplier</label>
				<select class="custom-select" name="supplier" id="supplier">
					<option selected>Select one supplier</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>

			<div class="form-group">
				<label for="category">Category</label>
				<select class="custom-select" name="category" id="category">
					<option selected>Select one category</option>
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>

			<div class="form-group">
			  <label for="qtdPerUnit">Quantity per unit</label>
			  <input type="text" name="qtdPerUnit" id="qtdPerUnit" class="form-control" placeholder="Type quantity per unit" aria-describedby="helpId">
			</div>

			<div class="form-group">
			  <label for="">Unit Price</label>
			  <input type="text" name="" id="" class="form-control" placeholder="Type unit price" aria-describedby="helpId">
			</div>

			<div class="form-group">
				<label for="">Quanity per unit</label>
				<input type="text" name="productName" id="" class="form-control" placeholder="Type quantity per unit" aria-describedby="helpId">
			</div>

			<button type="submit" class="btn btn-success">Cadastrar</button>
		</form>
	</div>

</div>