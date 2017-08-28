<?php

class ImovelModel extends Model {

    public function getImoveis() {
        $list = array();
        $sql = "SELECT * FROM imovel";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $list[] = new Imovel(
                $linha['id'], $linha['rua'], $linha['numero'], $linha['complemento'], 
                $linha['cep'], $linha['dormitorios'], $linha['garagem'], $linha['valor'], $linha['area'], $linha['descricao'], $linha['id_tipo'],
                $linha['id_bairro'], $linha['id_cidade'], $linha['id_estado']
            );
        }
        return $list;
    }

    public function getImovelById($id) {
        $sql = "SELECT * FROM imovel WHERE id = :id;";
        $linha = $this->ExecuteQuery($sql, [':id' => $id])[0];
        return new Imovel(
                $linha['id'], $linha['rua'], $linha['numero'], $linha['complemento'], 
                $linha['cep'], $linha['dormitorios'], $linha['garagem'], $linha['valor'], 
                $linha['area'], $linha['descricao'], $linha['id_tipo'],
                $linha['id_bairro'], $linha['id_cidade'], $linha['id_estado']
            );
    }

    public function insert($obj) {
        $sql = "INSERT INTO imovel(numero,complemento,rua,cep,garagem,dormitorios,valor,area,id_tipo,descricao,id_bairro,id_cidade,id_estado) "
                . "VALUES(:numero,:complemento,:rua,:cep,:garagem,:dormitorios,:valor,:area,:idTipo,:descricao,:idBairro,:idCidade,:idEstado)";
        
        return $this->ExecuteCommand($sql, $this->getParans($obj, false));
    }

    public function remove($id) {
        $sql = "DELETE FROM imovel WHERE id = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE imovel SET numero = :numero,"
                . " rua = :rua,"
                . " complemento = :complemento,"
                . " cep = :cep,"
                . " garagem = :garagem,"
                . " dormitorios = :dormitorios,"
                . " valor = :valor,"
                . " area = :area,"
                . " id_tipo = :idTipo,"
                . " descricao = :descricao,"
                . " id_bairro = :idBairro,"
                . " id_cidade = :idCidade,"
                . " id_estado = :idEstado"
                . " WHERE id = :id";
        
       
        
        print_r($sql);
        return $this->ExecuteCommand($sql, $this->getParans($obj, true));
      
    }
    
    private function getParans($obj, $update){
        $parans = [           
            ':rua' => $obj->getRua(),
            ':numero' => $obj->getNumero(),
            ':complemento' => $obj->getComplemento(),
            ':cep' => $obj->getCep(),
            ':dormitorios' => $obj->getDormitorios(),
            ':garagem' => $obj->getGaragem(),
            ':valor' => $obj->getValor(),
            ':area' => $obj->getArea(),
            ':descricao' => $obj->getDescricao(),
            ':idTipo' => $obj->getIdTipo(),
            ':idBairro' => $obj->getIdBairro(),
            ':idCidade' => $obj->getIdCidade(),
            ':idEstado' => $obj->getIdEstado()
        ];  
        
        if($update) {
            $parans[':id'] = $obj->getId();
        }
  
        return $parans;
    }
}
