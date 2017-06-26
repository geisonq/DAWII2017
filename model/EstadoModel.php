<?php

class EstadoModel extends Model {

    public function getEstados() {
        $list = array();
        $sql = "SELECT * FROM estado";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $list[] = new Estado(
                    $linha['estado'], $linha['id']);
        }
        return $list;
    }

    public function getEstadoById($id) {
        $sql = "SELECT * FROM estado WHERE id = :id;";
        $linha = $this->ExecuteQuery($sql, [':id' => $id])[0];
        return new Estado(
                $linha['estado'], $linha['id']);
    }

    public function insert($obj) {
        $sql = "INSERT INTO estado(estado) VALUES(:estado)";
        return $this->ExecuteCommand($sql, [':estado' => $obj->getEstado()]);
    }

    public function remove($id) {
        $sql = "DELETE FROM estado WHERE id = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE estado SET estado = :estado WHERE id = :id";
        $param = [':estado' => $obj->getEstado(),
            ':id' => $obj->getId()
        ];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
