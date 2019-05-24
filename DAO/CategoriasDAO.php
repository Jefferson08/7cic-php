<?php 
	
	require_once('ConexaoDAO.php');
	require_once('../../models/Categorias.php');

	class CategoriasDAO{

		public function listarCategorias(){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$categorias = new ArrayObject();

			$sqlCategorias = "SELECT * FROM categories";

			$rsCategorias = mysqli_query($vConn, $sqlCategorias) or die (mysqli_error($vConn));

			while($tblLista = mysqli_fetch_array($rsCategorias)){

				//instanciar cada item do array

				$categoria = new Categorias();

				//preencher os objetos com os métodos set

				$categoria->setCategoryID($tblLista['CategoryID']);
				$categoria->setCategoryName($tblLista['CategoryName']);
				$categoria->setDescription($tblLista['Description']);
				

				//adicioar objetos no array

				$categorias->append($categoria);
			}

			$db->fechaConexao();

			return $categorias;
		}
	}
 ?>