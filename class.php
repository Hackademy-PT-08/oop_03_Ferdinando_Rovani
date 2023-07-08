<?php


// Traccia 1:
// - Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:


//     Category
//     -- Attualita' 
//     -- Sport
//     -- Gossip
//     -- Storia


// - Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.

abstract class Categoria {
   abstract public function getMyCategory();
}

class Attualità extends Categoria {

    public $name;

    public function __construct($name){
        $this->name = $name;
    }


    public function getMyCategory(){

        return "la mia categoria è $this->name";

    }
}

class Sport extends Categoria {

    public $name;

    public function __construct($name){
        $this->name = $name;
    }


    public function getMyCategory(){

        return "la mia categoria è $this->name ";

    }
}

class Gossip extends Categoria {

    public $name;

    public function __construct($name){
        $this->name = $name;
    }


    public function getMyCategory(){

        return "la mia categoria è $this->name";

    }
}

class Storia extends Categoria {

    public $name;

    public function __construct($name){
        $this->name = $name;
    }


    public function getMyCategory(){

        return "la mia categoria è $this->name";

    }
}

