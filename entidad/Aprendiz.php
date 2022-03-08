<?php

class Aprendiz {
    public $doc;
    public $nom;
    public $ape;
    public $email;

    public function __construct($d, $n, $a) {
        $this->doc = $d;
        $this->nom = $n;
        $this->ape = $a;
    }
}


?>