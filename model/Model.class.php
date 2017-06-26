<?php

class Model {
    //put your code here
   
    private $connectionString = 'mysql:host=127.0.0.1;dbname=dawii;charset=utf8';
    private $user = 'root';
    private $password = '';

    protected function ExecuteQuery($sql, $parameters) {
        $connection = null;
        try {
            $connection = new PDO($this->connectionString, $this->user, $this->password);
            $connection->beginTransaction();
            $preparedStatment = $connection->prepare($sql);
            if ($parameters != null) {
                foreach ($parameters as $key => $value) {
                    $preparedStatment->bindParam($key, $value);
                }
            }

            if ($preparedStatment->execute() == FALSE) {
                throw new PDOException($preparedStatment->errorCode());
            }
			
            return $preparedStatment->fetchAll();
        } catch (PDOException $exc) {
            if ((isset($connection)) && ($connection->inTransaction())) {
                $connection->rollBack();
            }
            return array();
        } finally {
            if (isset($connection)) {
                unset($connection);
            }
        }
    }
    
    protected function ExecuteCommand($sql, $parameters) {
        $connection = null;
        try {
            $connection = new PDO($this->connectionString, $this->user, $this->password);
            $connection->beginTransaction();
            $preparedStatment = $connection->prepare($sql);
            if ($parameters != null) {
                foreach ($parameters as $key => $value) {
                    $preparedStatment->bindValue($key, $value);
                }
            }
            $preparedStatment->execute();
            $connection->commit();
            return $preparedStatment->rowCount();            
        } catch (PDOException $exc) {
            if ((isset($connection)) && ($connection->inTransaction())) {
                $connection->rollBack();
            }
            return array();
        } finally {
            if (isset($connection)) {
                unset($connection);
            }
        }
    }
    
}
