<?php

class BairroModel extends Model {

    public function getBairros() {
        $list = array();
        $sql = "SELECT * FROM bairro";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $list[] = new Bairro(
                    $linha['bairro'], $linha['id']);
        }
        return $list;
    }

    public function getBairroById($id) {
        $sql = "SELECT * FROM bairro WHERE id = :id;";
        $linha = $this->ExecuteQuery($sql, [':id' => $id])[0];
        return new Bairro(
                $linha['bairro'], $linha['id']);
    }

    public function insert($obj) {
        $sql = "INSERT INTO bairro(bairro) VALUES(:bairro)";
        return $this->ExecuteCommand($sql, [':bairro' => $obj->getBairro()]);
    }

    public function remove($id) {
        $sql = "DELETE FROM bairro WHERE id = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE bairro SET bairro = :bairro WHERE id = :id";
        $param = [':bairro' => $obj->getBairro(),
            ':id' => $obj->getId()
        ];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
