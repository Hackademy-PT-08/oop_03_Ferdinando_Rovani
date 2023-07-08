<?php

trait Calculator{
public function sum($a, $b) { 
    return $a + $b;
}
  
public function sub($a, $b) { 
    return $a - $b;
}
  
public function mul($a, $b) {
    return $a * $b;
}
  
public function div($a, $b) {
    return $a / $b;
}
  
public function sqr($a){
    return sqrt($a);
}
}

class Rettangolo{
    
    use Calculator;
    public $base;
    public $altezza;
    public function __construct($base, $altezza){
        $this->base= $base;
        $this->altezza= $altezza;
    }

    
    
}

$shape = new Rettangolo(4, 10);

$area= $shape->mul($shape->base,$shape->altezza);
echo $area . "\n";
$perimetro= $shape->sum($shape->base,$shape->altezza)*2;
echo $perimetro . "\n";
$diagonale = $shape->sqr($shape->sum($shape->mul($shape->base,$shape->base), $shape->mul($shape->altezza,$shape->altezza))). "\n";
echo $diagonale;