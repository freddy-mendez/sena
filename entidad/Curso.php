<?php

class Curso {
    public $cod;
    public $nom;
    public $instr;
    public $aprendices;
    public $numHoras;

    public function __construct($c, $n, $i, $nh) {
        $this->cod = $c;
        $this->nom = $n;
        $this->instr = $i;
        $this->numHoras = $nh;
        $this->aprendices = array();
    }
}

?>