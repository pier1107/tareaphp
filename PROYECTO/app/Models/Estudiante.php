<?php

namespace App\Models;

class Estudiante
{
    private $nombre;

    private $codigo;

    public function __construct($nombre, $codigo)
    {
        $this->nombre = $nombre;

        $this->codigo = $codigo;

    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
   
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    public function getCodigo()
    {
        return $this->codigo;
    }    
}