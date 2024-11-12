<?php
require_once 'entities/datebase/IEntity.class.php';
class Categoria implements IEntity{
    private $id;
    private $nombre;
    private $numImagenes;

    public function __construct(string $nombre='',int $numImagenes=0)
    {
        $this->nombre=$nombre;
        $this->numImagenes=$numImagenes;
        
    }

    public function toArray(): array
    {
        return[
            'id'=>$this->getId(),
            'nombre'=>$this->getNombre(),
            'numImagenes'=>$this->getNumImagenes()

        ];
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
     * Get the value of numImagenes
     */ 
    public function getNumImagenes()
    {
        return $this->numImagenes;
    }

    /**
     * Set the value of numImagenes
     *
     * @return  self
     */ 
    public function setNumImagenes($numImagenes)
    {
        $this->numImagenes = $numImagenes;

        return $this;
    }
}

?>