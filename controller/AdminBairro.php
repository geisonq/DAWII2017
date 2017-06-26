<?php

class AdminBairro extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new BairroModel();
    }

    public function index() {
        $data['bairro'] = $this->model->getBairros();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('bairro_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {
            $bairro = $this->filter('bairro');
            if ($bairro) {
                $bairro = new Bairro($bairro);
                if ($this->model->insert($bairro)) {
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
        $this->view->load('bairro_add', $data);
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
            $bairro = $this->filter('bairro');
            if ($bairro) {
                $bairro = new Bairro($bairro, $id);
                if ($this->model->update($bairro)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['bairro'] = $this->model->getBairroById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('bairro_update', $data);
        $this->view->load('footer');
    }

}
