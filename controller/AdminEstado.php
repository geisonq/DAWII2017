<?php

class AdminEstado extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new EstadoModel();
    }

    public function index() {
        $data['estado'] = $this->model->getEstados();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('estado_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {
            $estado = $this->filter('estado');
            if ($estado) {
                $estado = new Estado($estado);
                if ($this->model->insert($estado)) {
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
        $this->view->load('estado_add', $data);
        $this->view->load('footer');
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
            $estado = $this->filter('estado');
            if ($estado) {
                $estado = new Estado($estado, $id);
                if ($this->model->update($estado)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['estado'] = $this->model->getEstadoById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('estado_update', $data);
        $this->view->load('footer');
    }

}
