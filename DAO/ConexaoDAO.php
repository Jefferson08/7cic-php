<?php

    class ConexaoDAO{

        private $host, $user, $password, $dbname;
        public $vConn;

        function abreConexao(){
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbName = "northwind"; 
            
            $this->vConn = mysqli_connect($host, $user, $password, $dbName);

            return $this->vConn;
        }

        function fechaConexao(){
            mysqli_close($this->vConn);
        }
    }
?>