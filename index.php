<?php


// Traccia 2:
// - Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
//     - Titolo 
//     - Categoria 
//     - Tag
    
// - Crea delle istanze di classe Post, iniettando la dipendenza Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.


require "class.php";

class Post {
    public $titolo;
    public $categoria;
    public $tag;
    public function __construct($titolo, Storia $categoria, $tag ){
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }
}

$storia= new Post("aaa", new Storia("romana"), "bbb");

var_dump($storia->categoria->getMyCategory());


