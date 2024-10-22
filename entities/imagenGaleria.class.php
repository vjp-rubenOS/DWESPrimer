<?php
class imagenGaleria{
    /**
     * @var string
     */
    private $nombre;
     /**
     * @var string
     */
    
    private $descripcion;
     /**
     * @var int
     */

    private $numVisualizaciones;
     /**
     * @var int
     */

    private $numLikes;

     /**
     * @var int
     */
    private $numDownloads;

    public function __construct(string $nombre,string $descripcion,int $numVisualizaciones=0,int $numLikes=0,int $numDownloads=0)
    {   // Podemos pasarle solo el nombre y la descripcion y el resto por defecto sera 0
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->numVisualizaciones=$numVisualizaciones;
        $this->numLikes=$numLikes;
        $this->numDownloads=$numDownloads;
        
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre():string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion():string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of numVisualizaciones
     */ 
    public function getNumVisualizaciones():int
    {
        return $this->numVisualizaciones;
    }

    /**
     * Set the value of numVisualizaciones
     *
     * @return  self
     */ 
    public function setNumVisualizaciones($numVisualizaciones)
    {
        $this->numVisualizaciones = $numVisualizaciones;

        return $this;
    }

    /**
     * Get the value of numLikes
     */ 
    public function getNumLikes():int
    {
        return $this->numLikes;
    }

    /**
     * Set the value of numLikes
     *
     * @return  self
     */ 
    public function setNumLikes($numLikes)
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    /**
     * Get the value of numDownloads
     *
     * @return  int
     */ 
    public function getNumDownloads():int
    {
        return $this->numDownloads;
    }

    /**
     * Set the value of numDownloads
     *
     * @param  int  $numDownloads
     *
     * @return  self
     */ 
    public function setNumDownloads(int $numDownloads)
    {
        $this->numDownloads = $numDownloads;

        return $this;
    }
}


?>