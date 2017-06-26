<?php

class CidadeModel extends Model {

    public function getCidades() {
        $list = array();
        $sql = "SELECT * FROM cidade";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $list[] = new Cidade(
                    $linha['cidade'], $linha['id']);
        }
        return $list;
    }

    public function getCidadeById($id) {
        $sql = "SELECT * FROM cidade WHERE id = :id;";
        $linha = $this->ExecuteQuery($sql, [':id' => $id])[0];
        return new Cidade(
                $linha['cidade'], $linha['id']);
    }

    public function insert($obj) {
        $sql = "INSERT INTO cidade(cidade) VALUES(:cidade)";
        return $this->ExecuteCommand($sql, [':cidade' => $obj->getCidade()]);
    }

    public function remove($id) {
        $sql = "DELETE FROM cidade WHERE id = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE cidade SET cidade = :cidade WHERE id = :id";
        $param = [':cidade' => $obj->getCidade(),
            ':id' => $obj->getId()
        ];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
