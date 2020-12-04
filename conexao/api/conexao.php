<?php

abstract class classConexao{

    #concexão com o banco de dados
    public function conectaBD(){

        try{
            $Con = new PDO("mysql: host=localhost; dbname=fseletro;chaset=utf8", "root", "");
            return $Con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}