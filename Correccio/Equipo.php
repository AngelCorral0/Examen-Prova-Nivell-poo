<?php
////jugador mas goleador. y el otro jugador menos faltas hace.

Class Equipo{

    public $jugadors;
      
    public function __construct($jugadors)
    {
        $this->jugadors = $jugadors;
    }

    public function goleador()
    {
        $maxGoleador = 0;
        foreach($this->jugadors as $jugador){
           
            if($maxGoleador < $jugador->goles){
                $maxGoleador = $jugador->goles;
              
                echo"El jugador: $jugador->nom es el que más goles ha hecho con: $maxGoleador <br>";
            }
        }
    }

    public function menosFaltas()
    {
        $menosFaltas = 100;
        foreach($this->jugadors as $jugador){
            if($jugador->faltas_h < $jugador){
                $menosFaltas = $jugador->faltas_h;
        
                echo"El jugador $jugador->nom es el que menos faltas ha hecho con: $menosFaltas <br>";
            }
        }

    }
}



?>