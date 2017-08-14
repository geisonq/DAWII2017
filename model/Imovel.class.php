<?php

class Imovel {

    private $id;
    private $rua;	
    private $numero;	
    private $complemento;	
    private $cep;	
    private $dormitorios;	
    private $garagem;	
    private $valor;	
    private $area;	
    private $descricao;	
    private $idTipo;	
    private $idBairro;	
    private $idCidade;	
    private $idEstado;

    function __construct($id, $rua, $numero, $complemento, $cep, $dormitorios,
            $garagem, $valor, $area, $descricao, $idTipo, $idBairro, $idCidade, $idEstado) {
        $this->id = $id;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->dormitorios = $dormitorios;
        $this->garagem = $garagem;
        $this->valor = $valor;
        $this->area = $area;
        $this->descricao = $descricao;
        $this->idTipo = $idTipo;
        $this->idBairro = $idBairro;
        $this->idCidade = $idCidade;
        $this->idEstado = $idEstado;
    }

    function getId() {
        return $this->id;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getCep() {
        return $this->cep;
    }

    function getDormitorios() {
        return $this->dormitorios;
    }

    function getGaragem() {
        return $this->garagem;
    }

    function getValor() {
        return $this->valor;
    }

    function getArea() {
        return $this->area;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getIdTipo() {
        return $this->idTipo;
    }

    function getIdBairro() {
        return $this->idBairro;
    }

    function getIdCidade() {
        return $this->idCidade;
    }

    function getIdEstado() {
        return $this->idEstado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setDormitorios($dormitorios) {
        $this->dormitorios = $dormitorios;
    }

    function setGaragem($garagem) {
        $this->garagem = $garagem;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }

    function setIdBairro($idBairro) {
        $this->idBairro = $idBairro;
    }

    function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    function setIdEstado($idEstado) {
        $this->idEstado = $idEstado;
    }


    
}
