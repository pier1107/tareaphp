<?php

namespace App\Controllers;
use App\Models\Estudiante;
use App\Models\Curso;

class Matricula
{
    private $año;

    private $estudiante;

    private $curso;

public function __construct($año)

    {
    $this->año = $año;

    $this->estudiante = [];

    $this->curso = [];
    }
public function setAño($año)
    {
        $this->año = $año;
    }

public function getAño()
    {
    return $this->año;
    }


public function agregar(Estudiante $estudiante)
    {
        $this->estudiante[] = $estudiante;
    }

public function agregarCurso(Curso $curso)
    {
        $this->curso[] = $curso;
    }
public function listar()

    {
        return $this->estudiante;

    }

public function mostrar()
    {

        return $this->curso;
    }
}