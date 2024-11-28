<?php
require_once 'entities/datebase/IEntity.class.php';

class Mensaje implements IEntity{
        private $id;
        private $nombre;
        private $apellidos;
        private $asunto;
        private $email;
        private $texto;
        private $fecha;


        public function __construct($nombre='',$apellidos='',$asunto='',$email='',$texto=''){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->asunto = $asunto;
            $this->email = $email;
            $this->texto = $texto;
            $this->fecha = date("Y-m-d H:i:s");
            $this->id = null;
        }

        public function toArray(): array
        {
            return[
                'nombre'=> $this->getNombre(),
                'apellidos' => $this->getApellidos(),
                'asunto' => $this->getAsunto(),
                'email' => $this->getEmail(),
                'texto' => $this->getTexto(),
                'fecha' => $this->getFecha()

            ];
        }


        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of asunto
         */ 
        public function getAsunto()
        {
                return $this->asunto;
        }

        /**
         * Set the value of asunto
         *
         * @return  self
         */ 
        public function setAsunto($asunto)
        {
                $this->asunto = $asunto;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of texto
         */ 
        public function getTexto()
        {
                return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto)
        {
                $this->texto = $texto;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}


?>