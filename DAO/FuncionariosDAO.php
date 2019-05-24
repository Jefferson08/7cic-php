<?php 
	require_once('ConexaoDAO.php');
	require_once('../../models/Funcionarios.php');

	class FuncionariosDAO {

		public function listarFuncionarios(){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$funcionarios = new ArrayObject();

			$sqlFuncionarios = "SELECT * FROM employees";

			$rsFuncionarios = mysqli_query($vConn, $sqlFuncionarios) or die (mysqli_error($vConn));

			while($tblLista = mysqli_fetch_array($rsFuncionarios)){

				//instanciar cada item do array

				$funcionario = new Funcionarios();

				//preencher os objetos com os métodos set

				$funcionario->setEmployeeID($tblLista['EmployeeID']);
				$funcionario->setFirstName($tblLista['FirstName']);
				$funcionario->setTitle($tblLista['Title']);
				$funcionario->setAddress($tblLista['Address']);
				$funcionario->setCity($tblLista['City']);

				//adicioar objetos no array

				$funcionarios->append($funcionario);
			}

			$db->fechaConexao();

			return $funcionarios;
		}

		function carregarFuncionario($tmpEmployeeID){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$func = new Funcionarios();

			$sqlFunc = "SELECT * FROM employees WHERE EmployeeID = $tmpEmployeeID";

			$rsFunc = mysqli_query($vConn, $sqlFunc) or die (mysqli_error($vConn));

			if (mysqli_num_rows($rsFunc) == 0) {

				$db->fechaConexao();

	            return null;

	        } else {

	        	$tblFunc = mysqli_fetch_array($rsFunc);

	        	$func->setEmployeeID($tblFunc['EmployeeID']);
	        	$func->setLastName($tblFunc['LastName']);
				$func->setFirstName($tblFunc['FirstName']);
				$func->setTitle($tblFunc['Title']);
				$func->setAddress($tblFunc['Address']);
				$func->setCity($tblFunc['City']);
				$func->setRegion($tblFunc['Region']);
				$func->setPostalCode($tblFunc['PostalCode']);
				$func->setCountry($tblFunc['Country']);
				$func->setHomePhone($tblFunc['HomePhone']);


				$db->fechaConexao();
	            
	            return $func;
	            
	        }
		}

		public function cadastrarFuncionario($funcionario){
			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sqlCadastro = "INSERT INTO employees (LastName, FirstName, Title, Address, City, status) VALUES ('".$funcionario->getLastName()."' , '".$funcionario->getFirstName()."' , '".$funcionario->getTitle()."' , '".$funcionario->getAddress()."' , '".$funcionario->getCity()."', 0)";

			mysqli_query($vConn, $sqlCadastro) or die (mysqli_error($vConn));

			$db->fechaConexao();
		}

		public function excluirFuncionario($tmpId){
			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sql = "DELETE FROM employees WHERE EmployeeID = $tmpId";

			mysqli_query($vConn, $sql) or die (mysqli_error($vConn));

		}

		public function alterarFuncionario($tmpFuncionario){

			$db = new ConexaoDAO();

			$vConn = $db->abreConexao();

			$sqlUpdate = "UPDATE employees SET FirstName = '".$tmpFuncionario->getFirstName()."' , LastName = '".$tmpFuncionario->getLastName()."' , Title = '".$tmpFuncionario->getTitle()."' , Address = '".$tmpFuncionario->getAddress()."' , City = '".$tmpFuncionario->getCity()."' WHERE EmployeeID = '".$tmpFuncionario->getEmployeeID()."'";

			mysqli_query($vConn, $sqlUpdate) or die (mysqli_error($vConn));

			$db->fechaConexao();
			
		}
	}
 ?>