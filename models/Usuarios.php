<?php

    class Usuarios {

        private $username, $password, $permission;

        function getUsername() {
            return $this->username;
        }

        function getPassword() {
            return $this->password;
        }

        function getPermission() {
            return $this->permission;  
        }

        function setUsername($tmpUsername) {
            $this->username = $tmpUsername;
        }

        function setPassword($tmpPassword) {
            $this->password = $tmpPassword;
        }

        function setPermission($tmpPermission) {
            $this->permission = $tmpPermission;
        }
    }
?>