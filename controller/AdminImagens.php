<?php
class AdminImagens extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new ImagensModel();
    }

    public function index() {
        $data['data'] = $this->model->getImagens();
         echo json_encode($data);
    }

    public function add() { 
        $data['msg'] = 2;
        if ($this->filter('add')) {
            $idImovel = $this->filter('idImovel');
            if ($idImovel) {
                $imagens = new Imagens();
                $imagens->setIdImovel($idImovel);                                
                $imagens->setSrc($_FILES['src']['name']);
                if ($this->model->insert($imagens)) {
                    //Mover Imagem
                    
                    $data['msg'] = 1;                 
                } else {
                    $data['msg'] = 2; //'Erro ao cadastrar registro!'
                }
            } else {
                $data['msg'] = 3; //'Preencha todos os campos!'
            }
        } 
        
        echo json_encode($data);
                
    }

}
