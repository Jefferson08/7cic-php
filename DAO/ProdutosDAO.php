<?php 
	
	require_once 'models/Produtos.php';
	require_once 'ConexaoDAO.php';

	class ProdutosDAO{

		function listarProdutos(){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$itens = new ArrayObject();

			$sqlLista = "SELECT * FROM products";

			$rsLista = mysqli_query($vConn, $sqlLista) or die (mysqli_error($vConn));

			while($tblLista = mysqli_fetch_array($rsLista)){

				//instanciar cada item do array

				$prod = new Produtos();

				//preencher os objetos com os métodos set

				$prod->setProductId($tblLista['ProductID']);
				$prod->setProductName($tblLista['ProductName']);
				$prod->setSupplierID($tblLista['SupplierID']);
				$prod->serCategoryID($tblLista['CategoryID']);
				$prod->setQtdPerUnit($tblLista['QuantityPerUnit']);
				$prod->setUniPrice($tblLista['UnitPrice']);

				//adicioar objetos no array

				$itens->append($prod);
			}

			$db->fechaConexao();

			return $itens;
		}

		function visualizarProduto($tmpProductID){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$prod = new Produtos();

			$sqlProd = "SELECT * FROM products WHERE ProductID = '$tmpProductID'";

			$rsProd = mysqli_query($vConn, $sqlProd) or die (mysqli_error($vConn));

			if (mysqli_num_rows($rsProd) == 0) {

				$db->fechaConexao();

	            return null;

	        } else {

	        	$tblProd = mysqli_fetch_array($rsProd);

	        	$prod->setProductId($tblProd['ProductID']);
				$prod->setProductName($tblProd['ProductName']);
				$prod->setSupplierID($tblProd['SupplierID']);
				$prod->serCategoryID($tblProd['CategoryID']);
				$prod->setQtdPerUnit($tblProd['QuantityPerUnit']);
				$prod->setUniPrice($tblProd['UnitPrice']);

				$db->fechaConexao();
	            
	            return $prod;
	            
	        }
		}
	}
 ?>