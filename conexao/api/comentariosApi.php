<?php

include("conexao.php");

class comentariosApi extends classConexao{

    public function exibeComentarios(){

        $BFetch=$this->conectaBD()->prepare("select * from comentarios");
        $BFetch->execute();

        $COM=[];
        $C=0;

        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
            $COM[$C]=array(
                "id"=>$Fetch['id'],
                "nome"=>$Fetch['nome'],
                "msg"=>$Fetch['msg'],
                "data"=>$Fetch['data']
            );
            $C++;
        }
        echo(json_encode($COM));

    }

}