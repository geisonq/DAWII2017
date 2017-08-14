<?php

class AdminImovel extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new ImovelModel();
    }

    public function index() {
        $data['imoveis'] = $this->model->getImoveis();
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('imovel_list', $data);
        $this->view->load('footer');
    }

    public function add() {
        $data['msg'] = '';
        if ($this->filter('add')) {

            $rua = $this->filter('rua');
            $numero = $this->filter('numero');
            $complemento = $this->filter('complemento');
            $cep = $this->filter('cep');
            $dormitorios = $this->filter('dormitorios');
            $garagem = $this->filter('garagem');
            $valor = $this->filter('valor');
            $area = $this->filter('area');
            $descricao = $this->filter('descricao');
            $idTipo = $this->filter('idTipo');
            $idBairro = $this->filter('idBairro');
            $idCidade = $this->filter('idCidade');
            $idEstado = $this->filter('idEstado');


            //Testar todos os campos importantes
            if ($rua) {
                $imoveis = new Imovel(null, $rua, $numero, $complemento, $cep, $dormitorios, $garagem, $valor, $area, $descricao, $idTipo, $idBairro, $idCidade, $idEstado);
                if ($this->model->insert($imoveis)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }

        $estadoObj = new EstadoModel();
        $data['estados'] = $estadoObj->getEstados();

        $cidadeObj = new CidadeModel();
        $data['cidades'] = $cidadeObj->getCidades();

        $bairroObj = new BairroModel();
        $data['bairros'] = $bairroObj->getBairros();

        $tipoObj = new TipoModel();
        $data['tipos'] = $tipoObj->getTipos();

        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('imovel_add', $data);
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

            $rua = $this->filter('rua');
            $numero = $this->filter('numero');
            $complemento = $this->filter('complemento');
            $cep = $this->filter('cep');
            $dormitorios = $this->filter('dormitorios');
            $garagem = $this->filter('garagem');
            $valor = $this->filter('valor');
            $area = $this->filter('area');
            $descricao = $this->filter('descricao');
            $idTipo = $this->filter('idTipo');
            $idBairro = $this->filter('idBairro');
            $idCidade = $this->filter('idCidade');
            $idEstado = $this->filter('idEstado');

            if ($rua) {
                $imoveis = new Imovel($id, $rua, $numero, $complemento, $cep, $dormitorios, $garagem, $valor, $area, $descricao, $idTipo, $idBairro, $idCidade, $idEstado);
                if ($this->model->update($imoveis)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar registro!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['imoveis'] = $this->model->getImovelById($id);
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('imovel_update', $data);
        $this->view->load('footer');
    }

}
