<?php 
	
	require_once '../models/Produtos.php';
	require_once 'ConexaoDAO.php';

	class ProdutosDAO{

		function listarProdutos(){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$itens = new ArrayObject();

			$sqlLista = "SELECT p.*, c.CategoryName, s.CompanyName FROM products p, categories c, suppliers s WHERE p.CategoryID = c.CategoryID AND P.SupplierID = s.SupplierID order by p.ProductID";

			$rsLista = mysqli_query($vConn, $sqlLista) or die (mysqli_error($vConn));

			while($tblLista = mysqli_fetch_array($rsLista)){

				//instanciar cada item do array

				$prod = new Produtos();

				//preencher os objetos com os métodos set

				$prod->setProductId($tblLista['ProductID']);
				$prod->setProductName($tblLista['ProductName']);
				$prod->setSupplierID($tblLista['SupplierID']);
				$prod->setCategoryID($tblLista['CategoryID']);
				$prod->setQtdPerUnit($tblLista['QuantityPerUnit']);
				$prod->setUnitPrice($tblLista['UnitPrice']);
				$prod->setCategoria($tblLista['CategoryName']);
				$prod->setFornecedor($tblLista['CompanyName']);

				//adicioar objetos no array

				$itens->append($prod);
			}

			$db->fechaConexao();

			return $itens;
		}


		function carregarProduto($tmpProductID){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$prod = new Produtos();

			$sqlProd = "SELECT p.*, s.*, c.* FROM products p, categories c, suppliers s WHERE p.ProductID = '$tmpProductID' AND p.CategoryID = c.CategoryID AND p.SupplierID = s.SupplierID";

			$rsProd = mysqli_query($vConn, $sqlProd) or die (mysqli_error($vConn));

			if (mysqli_num_rows($rsProd) == 0) {

				$db->fechaConexao();

	            return null;

	        } else {

	        	$tblProd = mysqli_fetch_array($rsProd);

	        	$prod->setProductId($tblProd['ProductID']);
				$prod->setProductName($tblProd['ProductName']);
				$prod->setSupplierID($tblProd['SupplierID']);
				$prod->setCategoryID($tblProd['CategoryID']);
				$prod->setQtdPerUnit($tblProd['QuantityPerUnit']);
				$prod->setUnitPrice($tblProd['UnitPrice']);
				$prod->setCategoria($tblProd['CategoryName']);
				$prod->setFornecedor($tblProd['CompanyName']);

				$db->fechaConexao();
	            
	            return $prod;
	            
	        }
		}

		function cadastrarProduto($tmpProduto){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sqlCadastro = "INSERT INTO products (ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, Discontinued) VALUES ('".$tmpProduto->getProductName()."' , '".$tmpProduto->getSupplierID()."' , '".$tmpProduto->getCategoryID()."' , '".$tmpProduto->getQtdPerUnit()."' , '".$tmpProduto->getUnitPrice()."', 0)";

			mysqli_query($vConn, $sqlCadastro) or die (mysqli_error($vConn));

			$db->fechaConexao();
		}
	}
 ?>