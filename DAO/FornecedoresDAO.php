<?php 
	require_once('ConexaoDAO.php');
	require_once('models/Fornecedores.php');

	class FornecedoresDAO {

		public function listarFornecedores(){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$fornecedores = new ArrayObject();

			$sqlFornecedores = "SELECT * FROM suppliers";

			$rsFornecedores = mysqli_query($vConn, $sqlFornecedores) or die (mysqli_error($vConn));

			while($tblLista = mysqli_fetch_array($rsFornecedores)){

				//instanciar cada item do array

				$fornecedor = new Fornecedores();

				//preencher os objetos com os métodos set

				$fornecedor->setSupplierID($tblLista['SupplierID']);
				$fornecedor->setCompanyName($tblLista['CompanyName']);
				$fornecedor->setContactName($tblLista['ContactName']);
				$fornecedor->setContactTitle($tblLista['ContactTitle']);
				$fornecedor->setAddress($tblLista['Address']);
				$fornecedor->setCity($tblLista['City']);
				$fornecedor->setRegion($tblLista['Region']);
				$fornecedor->setPostalCode($tblLista['PostalCode']);
				$fornecedor->setCountry($tblLista['Country']);
				$fornecedor->setPhone($tblLista['Phone']);
				$fornecedor->setFax($tblLista['Fax']);
				$fornecedor->setHomePage($tblLista['HomePage']);
				

				//adicioar objetos no array

				$fornecedores->append($fornecedor);
			}

			$db->fechaConexao();

			return $fornecedores;
		}
	}
 ?>