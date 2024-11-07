<?php
require_once 'entities/datebase/IEntity.class.php';

    Class imagenGaleria {

        const RUTA_IMAGENES_PORTFOLIO= 'images/index/portfolio/';
        const RUTA_IMAGENES_GALLERY = 'images/index/gallery/';

        private $nombre;
        private $descripcion;
        private $numVisualizaciones;
        private $numLikes;
        private $numDownloads;
        
        private $id;

        public function __construct(string $nombre='', string $descripcion='', int $numVisualizaciones=0, int $numLikes=0, int $numDownloads=0)
        {
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->numVisualizaciones = $numVisualizaciones;
            $this->numLikes = $numLikes;
            $this->numDownloads = $numDownloads;
            $this->id=null;
        }

        public function getNombre() : string{
            return $this->nombre;
        }

        public function setNombre(string $nombre) : void{
            $this->nombre = $nombre;
        }

        public function getDescripcion() : string{
            return $this->descripcion;
        }

        public function setDescripcion(string $descripcion) : void{
            $this->descripcion = $descripcion;
        }

        
        public function getNumVisualizaciones() : int{
            return $this->numVisualizaciones;
        }

        public function setNumVisualizaciones(int $numVisualizaciones) : void{
            $this->numVisualizaciones = $numVisualizaciones;
        }

        
        public function getNumLike() : int{
            return $this->numLikes;
        }

        public function setNumLike(int $numLikes) : void{
            $this->numLikes = $numLikes;
        }

        
        public function getNumDownloads() : int{
            return $this->numDownloads;
        }

        public function setNumDownloads(int $numDownloads) : void{
            $this->numDownloads = $numDownloads;
        }

        public function getUrlPortfolio():string{
            return self::RUTA_IMAGENES_PORTFOLIO.$this->getNombre();
        }

        public function getUrlGallery():string{
            return self::RUTA_IMAGENES_GALLERY.$this->getNombre();
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
        public function toArray(){
            return [
                'id'=>$this->getId(),
                'nombre'=>$this->getNombre(),
                'descripcion'=>$this->getDescripcion(),
                'numVisualizaciones'=>$this->getNumVisualizaciones(),
                'numDownloads'=>$this->getNumDownloads()

            ];
        }
    }

?>