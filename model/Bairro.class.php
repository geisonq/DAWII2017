<?php

class Bairro {

    private $id;
    private $bairro;

    function __construct($bairro, $id=NULL) {
        $this->id = $id;
        $this->bairro = $bairro;
    }

    function getId() {
        return $this->id;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

}
