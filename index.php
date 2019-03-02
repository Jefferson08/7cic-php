
<html>
<head>
	<title>Projeto PHP</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	<hr>
	<h1>Login</h1><hr>

	<div class="form">
		<form action="login.php" method="post">
		<div class="form-group">
		<label for="">Nome de Usuário</label>
		<input type="text" name="username" id="" class="form-control" placeholder="Digite seu email" aria-describedby="helpId">
		</div>

		<div class="form-group">
		  <label for="">Senha</label>
		  <input type="password" name="senha" id="" class="form-control" placeholder="Digite sua senha" aria-describedby="helpId">	
		</div>

		<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>

	</div>
	
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap"></script>
</body>
</html>