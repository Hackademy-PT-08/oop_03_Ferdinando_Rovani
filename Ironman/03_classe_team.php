<?php

require "02_azioni.php";

// creo una classe per creare un'istanza di un'armatura che compie delle azioni


class memberOfTheTeam {
    public $testa;
    public $corpo;
    public $gambe;
    public $numero;
    static public $counter = 0;
    public function __construct(Head $testa, Body $corpo, Legs $gambe){
        $this->testa=$testa;
        $this->corpo=$corpo;
        $this->gambe=$gambe;
        self::$counter ++;
        $this->numero= self::$counter;
    }

    // metodo che ritorna una stringa con l'azione che compie l'armatura
    
    public function moves(){

        // per decidere in modo randomico se l'armatura si difende o attacca
        $a = (rand(1, 2)>1)? $this->corpo->action(): $this->corpo->defend();
        $b = (rand(1, 2)>1)? $this->gambe->action(): $this->gambe->defend();
        
        return "L'armatura del team Ironman n " . $this->numero . " con la testa " . $this->testa->action() . ", con le braccia $a e con le gambe $b. \n \n";
    } 
}







