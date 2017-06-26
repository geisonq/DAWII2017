<?php

class AdminCidade extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new CidadeModel();
    }

    public function index() {
        $data['cidade'] = $this->model->getCidades();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('cidade_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {
            $cidade = $this->filter('cidade');
            if ($cidade) {
                $cidade = new Cidade($cidade);
                if ($this->model->insert($cidade)) {
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
        $this->view->load('cidade_add', $data);
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
            $cidade = $this->filter('cidade');
            if ($cidade) {
                $cidade = new Cidade($cidade, $id);
                if ($this->model->update($cidade)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['cidade'] = $this->model->getCidadeById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('cidade_update', $data);
        $this->view->load('footer');
    }

}
