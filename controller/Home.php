<?php
class Home extends Controller{

    private $texto;

    public function __construct() {
        parent::__construct();     
        $this->model = new ImovelModel();
    }

    public function index($pagina=1){
  
        $total = $this->model->totalImoveis();         
        $data['total'] = ceil($total/3);
        
        $imoveis = $this->model->getImoveisPaginador($pagina);        
        $data['imoveis'] = $imoveis;     
            
        $this->view->load('header');
        $this->view->load('index', $data);
        $this->view->load('footer');
    }

    public function imprimir($texto = null) {
        $this->texto = ($texto) ? $texto : $this->texto;
        echo $texto;
    }

}
