<?php

namespace App\Models;

class Curso
{
    private $nombre;

    private $profesor;

    public function __construct($nombre, $profesor)
    {
        $this->nombre = $nombre;

        $this->profesor = $profesor;
    
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    public function getNombre()
    {
     return $this->nombre;
    }

    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }

    public function getProfesor()
    {
        return $this->profesor;
    }
}