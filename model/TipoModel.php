<?php

class TipoModel extends Model {

    public function getTipos() {
        $list = array();
        $sql = "SELECT * FROM tipo";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $tipo = new Tipo();

            $tipo->setId($linha['id']);
            $tipo->setTipo($linha['tipo']);

            $list[] = $tipo;
        }
        return $list;
    }

    public function getTipoById($id) {
        $sql = "SELECT * FROM tipo WHERE id = :id;";
        $linha = $this->ExecuteQuery($sql, [':id' => $id])[0];
        return new Tipo(
                $linha['tipo'], $linha['id']);
    }

    public function insert($obj) {
        $sql = "INSERT INTO tipo(tipo) VALUES(:tipo)";
        return $this->ExecuteCommand($sql, [':tipo' => $obj->getTipo()]);
    }

    public function remove($id) {
        $sql = "DELETE FROM tipo WHERE id = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE tipo SET tipo = :tipo WHERE id = :id";
        $param = [':tipo' => $obj->getTipo(),
            ':id' => $obj->getId()
        ];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
