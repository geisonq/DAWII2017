<?php

class Estado {

    private $id;
    private $estado;

    function __construct($estado, $id=NULL) {
        $this->id = $id;
        $this->estado = $estado;
    }

    function getId() {
        return $this->id;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
