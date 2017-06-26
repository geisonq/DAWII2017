<?php

class AdminUsuario extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new UsuarioModel();
    }

    public function index() {
        $data['usuario'] = $this->model->getUsuarios();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('usuario_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {

            $nome = $this->filter('nome');
            $login = $this->filter('login');
            $email = $this->filter('email');
            $senha = $this->filter('senha');
            $confirma = $this->filter('confirma');

            if ($nome && $login && $email && $senha && $confirma) {
                if ($senha == $confirma) {
                    $usuario = new Usuario($login, $senha, $nome, $email);
                    if ($this->model->insert($usuario)) {
                        $this->index();
                        return true;
                    } else {
                        $data['msg'] = 'Erro ao cadastrar registro!';
                    }
                } else {
                    $data['msg'] = 'Senhas não conferem!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('usuario_add', $data);
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

            $nome = $this->filter('nome');
            $login = $this->filter('login');
            $email = $this->filter('email');
            $senha = $this->filter('senha');
            $confirma = $this->filter('confirma');
            echo $nome . $login . $email . $senha . $confirma;
            if ($nome && $login && $email && $senha && $confirma) {

                if ($senha == $confirma) {

                    $usuario = new Usuario($login, $senha, $nome, $email, $id);
                    if ($this->model->update($usuario)) {
                        $this->index();
                        return true;
                    } else {
                        $data['msg'] = 'Erro ao cadastrar registro!';
                    }
                } else {
                    $data['msg'] = 'Senhas não conferem!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['usuario'] = $this->model->getUsuarioById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('usuario_update', $data);
        $this->view->load('footer');
    }

}
