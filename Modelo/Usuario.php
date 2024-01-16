<?php
    class Usuario{
        // Miembros privados de la clase
        private int $id;
        private int $nombre;
        private int $usuario;
        private int $pwd;
        private int $email;

    
        public function getId(){
                return $this->id;
        }

        public function setId($id){
                $this->id = $id;
                return $this;
        }

        public function getNombre(){
                return $this->nombre;
        }
        
        public function setNombre($nombre){
                $this->nombre = $nombre;
                return $this;
        }
 
        public function getUsuario(){
                return $this->usuario;
        }
         
        public function setUsuario($usuario){
                $this->usuario = $usuario;
                return $this;
        }

        public function getPwd(){
                return $this->pwd;
        }

        public function setPwd($pwd){
                $this->pwd = $pwd;
                return $this;
        }
        
        public function getEmail(){
                return $this->email;
        }
        
        public function setEmail($email){
                $this->email = $email;
                return $this;
        }
    }









?>