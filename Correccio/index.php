<?php
    require "Jugador.php";
    require "Equipo.php";
//jugadores de futbol 7
/*Atributs: nombre, edad, posicion "portero, defensa, centrocampista, y delantero"
numero de goles,
faltas realizadas y recibidas*/

$jugador1 = new Jugador("pep",25,31,4,13,"delantero");
$jugador2 = new Jugador("Angel",25,15,4,14,"delantero");
$jugador3 = new Jugador("Angel",25,5,4,13,"delantero");
$jugador4 = new Jugador("Angel",25,15,4,12,"delantero");
$jugador5 = new Jugador("Angel",25,15,4,20,"delantero");
$jugador6 = new Jugador("Angel",25,15,4,17,"delantero");
$jugador7 = new Jugador("Angel",25,32,4,8,"delantero");


$nuevoEquipo = array();
array_push($nuevoEquipo, $jugador1,$jugador2,$jugador3,$jugador4,$jugador5,$jugador6,$jugador7);

$newTeam = new Equipo($nuevoEquipo);
$newTeam->maximGoleador();
$newTeam->jugadorConMenosFaltas();


?>