<?php

class Imagens {

    private $id;
    private $src;
    private $idImovel;
    
    function getId() {
        return $this->id;
    }

    function getSrc() {
        return $this->src;
    }

    function getIdImovel() {
        return $this->idImovel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSrc($src) {
        $this->src = $src;
    }

    function setIdImovel($idImovel) {
        $this->idImovel = $idImovel;
    }



}