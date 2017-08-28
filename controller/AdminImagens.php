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
                
    }


}
