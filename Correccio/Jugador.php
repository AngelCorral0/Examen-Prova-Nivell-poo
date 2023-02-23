<?php
///*Atributs: nombre, edad, posicion "portero, defensa, centrocampista, y delantero"

Class Jugador{

    public $nom;
    public $edad;
    public $goles;
    public $faltas_r;
    public $faltas_h;
    public $posicion;
    

    public function __construct($nom, $edad, $goles, $faltas_r, $faltas_h, $posicion)
    {
        $this->nom = $nom;
        $this->edad = $edad;
        $this->goles = $goles;
        $this->posicion = $posicion;
        $this->faltas_r = $faltas_r;
        $this->faltas_h = $faltas_h;
    }

}






?>