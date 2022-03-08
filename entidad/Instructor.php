<?php

class Instructor {
    public $doc;
    public $nom;
    public $ape;
    public $area;
    public $email;

    public function __construct($d, $n, $a) {
        $this->doc = $d;
        $this->nom = $n;
        $this->ape = $a;
    }
}


?>