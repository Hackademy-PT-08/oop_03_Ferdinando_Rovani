<?php

require "01_armatura.php";

// creo delle sottoclassi con dei metodi per definire delle azioni

class Head extends Armor{

    public function action(){
        return "spara laser dagli occhi";
    }
}

class Legs extends Armor implements Bonus{
    public function action(){
        return "tira un calcio";
    }
    public function defend(){
        return "vola in alto";
    }
}

class Body extends Armor implements Bonus{
    public function action(){
        return "tira un pugno";
    }
    public function defend(){
        return "usa lo scudo";
    }
}