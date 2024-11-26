<?php

require_once 'datebase/IEntity.class.php';

class Partner implements IEntity
{

    const RUTA_LOGO = 'images/logo/';
    //Atributos
    private $nombre;
    private $logo;
    private $descripcion;
    private $id;

     /**
     * Constructor de la clase Asociados
     *
     * @param string $nombre
     * @param string $log
     * @param string $descripcion
     */
    public function __construct($nombre = ' ',  $logo = ' ',  $descripcion = ' ')
    {
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
        $this->id = null;
    }
    /**
     * Función que convierte un Objeto en un array asociativo 
     * las claves son nombres de las propiedades del objeto y los valores son los datos de esas propiedades.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'logo' => $this->getLogo(),
            'descripcion' => $this->getDescripcion()
        ];
    }

    public function getRutaLogo()
    {
        return self::RUTA_LOGO . $this->getLogo();
    }


    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
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
     * Get the value of logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

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
