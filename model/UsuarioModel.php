<?php

class UsuarioModel extends Model {

    //put your code here

    public function getUsuarioByLogin($login) {
        $sql = "SELECT * FROM usuario WHERE login = :login";
        $resultado = $this->ExecuteQuery($sql, [':login' => $login]);
        if ($resultado) {
            $user = $resultado[0];
            return new Usuario($user['login'], $user['senha'], $user['nome'], $user['email'], $user['id_user']);
        } else {
            return $resultado;
        }
    }

    public function getUsuarios() {
        $list = array();
        $sql = "SELECT * FROM usuario";

        $resultados = $this->ExecuteQuery($sql, array());

        foreach ($resultados as $linha) {
            $list[] = new Usuario(
                    $linha['login'], $linha['senha'], $linha['nome'], $linha['email'], $linha['id_user']);
        }
        return $list;
    }

    public function getUsuarioById($id) {
        $sql = "SELECT * FROM usuario as ne WHERE ne.id_user = :id_user;";
        $linha = $this->ExecuteQuery($sql, [':id_user' => $id])[0];
        return new Usuario(
                $linha['login'], $linha['senha'], $linha['nome'], $linha['email'], $linha['id_user']);
    }

    public function insert($obj) {
        $sql = "INSERT INTO usuario(nome,login,senha , email) VALUES(:nome,:login, :senha, :email)";
        return $this->ExecuteCommand($sql, [':nome' => $obj->getNome(),
                    ':login' => $obj->getLogin(),
                    ':senha' => md5($obj->getSenha()),
                    ':email' => $obj->getEmail()
        ]);
    }

    public function remove($id) {
        $sql = "DELETE FROM usuario WHERE id_user = :id";
        return $this->ExecuteCommand($sql, [':id' => $id]);
    }

    public function update($obj) {
        $sql = "UPDATE usuario SET nome = :nome, login = :login, senha = :senha, email = :email  WHERE id_user = :id";
        $param = [':nome' => $obj->getNome(),
            ':login' => $obj->getLogin(),
            ':senha' => $obj->getSenha(),
            ':email' => $obj->getEmail(),
            ':id' => $obj->getId_user()
        ];
        if ($this->ExecuteCommand($sql, $param)) {
            return true;
        } else {
            return false;
        }
    }

}
