<?php

class ImagensModel extends Model {

    public function getImagens() {
        $list = array();
        $sql = "SELECT id, src, 'Deletar' FROM imagens";
        return $this->ExecuteQuery($sql, array());
    }    
    
    public function insert(Imagens $obj) {
    }        
}
