<?php

require "03_classe_team.php";

// creo una funzione che genera un numero casuale di armature e le inserisce in un array e per ogni armatura stampa le azioni che esegue

function randomMembers(){
    $ironArray=[];
    $i=0;

    do 
    {       
        array_push($ironArray,  new memberOfTheTeam(new Head(), new Body(), new Legs()) );
        $i=rand(1,10);
    } while($i<8);

    foreach($ironArray as $armatura){
        
        echo $armatura->moves();
    }
}

randomMembers();