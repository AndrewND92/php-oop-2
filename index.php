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
    // STAMPA
    public function __toString() {
      return "Quadrato:" . '<br>'
      . "Area: " . $this -> getArea() . '<br>'
      . "Perimetro: " . $this -> getPerimeter() . '<br>' . '<br>';
    }
  }

  class Cube extends Square {

    // CALCOLO VOLUME DEL CUBO
    public function getVolumes() {
      return $this -> lato * $this -> lato * $this -> lato;
    }
    // CALCOLO DELLA SUPERFICIE DEL CUBO
    public function getSurface() {
      return 6 * $this -> lato * $this -> lato;
    }
    // STAMPA
    public function __toString() {
      return "Cubo: " . '<br>'
      . "Volume: " . $this -> getVolumes() . '<br>'
      . "Superficie: " . $this -> getSurface() . '<br>';
    }
  }


  $quadrato_1 = new Square (23);
  echo $quadrato_1;

  $cubo = new Cube (15);
  echo $cubo;






?>
