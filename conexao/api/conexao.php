<?php

abstract class classConexao{

    #concexão com o banco de dados
    public function conectaBD(){

        try{
            //Crindo a coneccaõ com banco de dados
            
            $Con = new PDO("mysql: host=localhost; dbname=fseletro; charset=utf8", "root", "");
            
            return $Con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }

}