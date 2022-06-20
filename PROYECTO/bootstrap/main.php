<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante,Curso};
use App\Controllers\Matricula;

$matricula = new Matricula(2022);
$matricula->agregar(new Estudiante("Maria Becerra",3216545));
$matricula->agregarCurso(new Curso("Programacion Estructurada", "Robert de Niro"));
$matricula->agregarCurso(new Curso("Base de Datos","Juan Vargas"));


foreach($matricula->listar() as $estudiante){
    echo"\n";
    echo"+++++++++Matricula++++++"."\n";
    echo "Año de matricula: ".$matricula->getAño()."\n";
    echo"\n";
    echo"-------Estudiante-----"."\n";
    echo "Nombre: ".$estudiante->getNombre()."\n";
    echo "Codigo: ".$estudiante->getCodigo()."\n";
    echo"\n";
    echo"------Cursos-----"."\n";
    foreach($matricula->mostrar() as $curso)
    {
        echo "Curso: ".$curso->getNombre()."\n";
        echo "Docente: ".$curso->getProfesor()."\n";
    }
}


/*use App\Models\{Estudiante,Municipalidad,Cliente};
use App\Controllers\ClienteControlador;

//print_r($estudiante); o usar el de abajo
//print_r(get_class_methods($estudiante));
/*$muni = new Municipalidad();

$muni->setNombre('Max Planck');

echo "Nombre: ".$muni->getNombre();*/

//$cliente = new Cliente('Max Planck',2345567);

//$print_r($cliente);

/*$controlador = new ClienteControlador();

$controlador->agregar(new Cliente('Max Plack',456));
$controlador->agregar(new Cliente('James Maxwell',736));
$controlador->agregar(new Cliente('Alesandro volta',436));

//print_r($controlador);

foreach($controlador->listar() as $cliente){
    echo "Nombres: ".$cliente->getNombres()."\n";
    echo "DNI: ".$cliente->getDni()."\n";
}*/