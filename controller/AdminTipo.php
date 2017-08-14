<?php

class AdminTipo extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new TipoModel();
    }

    public function index() {
        $data['tipo'] = $this->model->getTipos();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('tipo_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {
            $tipo = $this->filter('tipo');
            if ($tipo) {
                $tipoObj = new Tipo();
                $tipoObj->setTipo($tipo);
                
                if ($this->model->insert($tipoObj)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('tipo_add', $data);
        $this->view->load('footer');
    }

    public function removeTudo() {
        foreach ($_POST['idTipo'] as $idTipo) {
            $this->model->remove($idTipo);
        }
        $this->index();
    }
    
    public function remove($id) {
        if ($this->filter('del')) {
            $this->model->remove($id);
            $this->index();
        }
    }    
    
    public function update($id) {
        $data['msg'] = '';

        if ($this->filter('update')) {
            $tipo = $this->filter('tipo');
            if ($tipo) {
                $tipoObj = new Tipo();
                $tipoObj->setId($id);
                $tipoObj->setTipo($tipo);
                
                if ($this->model->update($tipoObj)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['tipo'] = $this->model->getTipoById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('tipo_update', $data);
        $this->view->load('footer');
    }

}
