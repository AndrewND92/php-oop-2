<?php

class Square {
  public $lato;

  // CONSTRUCT
  public function __construct($lato) {
    $this -> lato = $lato;
  }

  // CALCOLO DELL'AREA DEL QUADRATO
  public function getArea() {
    return $this -> lato * $this -> lato ;
  }

  // CALCOLO DEL PERIMETRO DEL QUADRATO
  public function getPerimeter() {
    return $this -> lato * 4;

  }

  public function __toString() {
    return "Quadrato:" . '<br>'
         . "Area: " . $this -> getArea() . '<br>'
         . "Perimetro: " . $this -> getPerimeter() . '<br>';
  }

}


class Cube {

}

$quadrato_1 = new Square (10);
echo $quadrato_1;
 ?>
