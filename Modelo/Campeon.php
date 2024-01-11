<?php

    class Campeon{
        private int $id;
        private string $nombre;
        private string $rol;
        private string $dificultad;
        private string $descripcion;
        

        
        public function getId()
        {
                return $this->id;
        }

         
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

         
        public function getNombre()
        {
                return $this->nombre;
        }

         
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

         
        public function getRol()
        {
                return $this->rol;
        }

        
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }

         
        public function getDificultad()
        {
                return $this->dificultad;
        }

         
        public function setDificultad($dificultad)
        {
                $this->dificultad = $dificultad;

                return $this;
        }

        
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        
        public function setDescripcion($descripcion){
                $this->descripcion = $descripcion;

                return $this;
        }
    }

?>