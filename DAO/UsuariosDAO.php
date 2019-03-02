<?php

    require_once 'ConexaoDAO.php';

    class UsuariosDAO {

        public function validarUsuario($username, $senha){

            $db = new ConexaoDAO();
            $vConn = $db->abreConexao();

            $user = new Usuarios();

            $sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$senha'";

            $rsLogin = mysqli_query($vConn, $sql) or die (mysqli_error($vConn));

            if (mysqli_num_rows($rsLogin) == 0) {
                return null;
            } else {

                $tblUser = mysqli_fetch_array($rsLogin);

                $user->setUsername($tblUser['username']);
                $user->setPassword($tblUser['password']);
                $user->setPermission($tblUser['permission']);
                
                return $user;
            }
            
            $db->fechaConexao();


        }

        public function cadastrarUsuario($user){

        }

        public function consultarUsuario($user){

        }

        public function deletarUsuario($user){

        }


    }
?>