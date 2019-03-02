<?php 

    require_once 'DAO/UsuariosDAO.php';
    require_once 'models/Usuarios.php';
    

    session_start();

    if (isset($_POST['username'])) {
        if (!empty($_POST['username']) && !empty($_POST['senha'])) {
            
            $username = $_POST['username'];
            $senha = md5($_POST['senha']);

            $user = new Usuarios();
            $db = new UsuariosDAO();

            $user = $db->validarUsuario($username, $senha);

            if ($user == null) {
                $_SESSION['statusLogin'] = 0;
                echo "<script> alert('Dados Inválidos') </script>";
                echo "<script> location.href = 'index.php' </script>";
            } else {
                $_SESSION['user'] = $user->getUsername();    
                $_SESSION['password'] = $user->getPassword();    
                $_SESSION['permission'] = $user->getPermission();    
                $_SESSION['statusLogin'] = 1; 
                
                echo "<script> location.href = 'home.php' </script>";
            }
        } else {
            echo "<script> alert('Preencha os campos email e senha')</script>";
            echo "<script> location.href = 'index.php' </script>";
        }
    }

?>