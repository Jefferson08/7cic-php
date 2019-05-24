<?php 
	require_once('ConexaoDAO.php');
	require_once('../../models/Fornecedores.php');

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

		function carregarFornecedor($tmpSupplierID){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$forn = new Fornecedores();

			$sqlForn = "SELECT * FROM suppliers WHERE SupplierID = $tmpSupplierID";

			$rsForn = mysqli_query($vConn, $sqlForn) or die (mysqli_error($vConn));

			if (mysqli_num_rows($rsForn) == 0) {

				$db->fechaConexao();

	            return null;

	        } else {

	        	$tblForn = mysqli_fetch_array($rsForn);

	        	$forn->setSupplierID($tblForn['SupplierID']);
	        	$forn->setCompanyName($tblForn['CompanyName']);
				$forn->setContactName($tblForn['ContactName']);
				$forn->setContactTitle($tblForn['ContactTitle']);
				$forn->setAddress($tblForn['Address']);
				$forn->setPhone($tblForn['Phone']);

				$db->fechaConexao();
	            
	            return $forn;
	            
	        }
		}

		public function cadastrarFornecedor($fornecedor){
			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sqlCadastro = "INSERT INTO suppliers (CompanyName, ContactName, ContactTitle, Address, Phone) VALUES ('".$fornecedor->getCompanyName()."' , '".$fornecedor->getContactName()."' , '".$fornecedor->getContactTitle()."' , '".$fornecedor->getAddress()."' , '".$fornecedor->getPhone()."')";

			mysqli_query($vConn, $sqlCadastro) or die (mysqli_error($vConn));

			$db->fechaConexao();
		}

		public function excluirFornecedor($tmpId){
			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sql = "DELETE FROM suppliers WHERE SupplierID = $tmpId";

			mysqli_query($vConn, $sql) or die (mysqli_error($vConn));

		}

		public function alterarFornecedor($tmpFornecedor){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sqlUpdate = "UPDATE suppliers SET CompanyName = '".$tmpFornecedor->getCompanyName()."' , ContactName = '".$tmpFornecedor->getContactName()."' , ContactTitle = '".$tmpFornecedor->getContactTitle()."' , Address = '".$tmpFornecedor->getAddress()."' , Phone = '".$tmpFornecedor->getPhone()."' WHERE SupplierID = '".$tmpFornecedor->getSupplierID()."'";

			mysqli_query($vConn, $sqlUpdate) or die (mysqli_error($vConn));

			$db->fechaConexao();
			
		}
	}
 ?>