<?php
////jugador mas goleador. y el otro jugador menos faltas hace.

Class Equipo{

    public $jugadors;
      
    public function __construct($jugadors)
    {
        $this->jugadors = $jugadors;
    }

    public function maximGoleador()
    {
        $maxGoleador = 0;
       
        foreach($this->jugadors as $jugador){
           
            if($maxGoleador < $jugador->goles){
                $maxGoleador = $jugador->goles;
            }
            $jugadorNom = $jugador->nom;
        }
        echo"El jugador: $jugadorNom es el que más goles ha hecho con: $maxGoleador <br>";

    }

    public function jugadorConMenosFaltas()
    {
        $jugadorMenosFaltas = 999;
                
        foreach($this->jugadors as $jugador){
            if($jugador->faltas_h < $jugadorMenosFaltas){
                $jugadorMenosFaltas = $jugador->faltas_h;
            }
            $jugadorNom = $jugador->nom; 
        }
        echo"El jugador $jugadorNom es el que menos faltas ha hecho con: $jugadorMenosFaltas <br>";

    }
}



?>