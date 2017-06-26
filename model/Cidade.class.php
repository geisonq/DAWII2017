<?php

class Cidade {

    private $id;
    private $cidade;

    function __construct($cidade, $id=NULL) {
        $this->id = $id;
        $this->cidade = $cidade;
    }

    function getId() {
        return $this->id;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

}