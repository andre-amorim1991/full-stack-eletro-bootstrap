<?php
include("conexao.php");

class produtosApi extends classConexao{

    #Exibição dos produtos em json
    public function exibeProdutos(){

        $BFetch=$this->conectaBD()->prepare("select * from produtos");
        $BFetch->execute();

        $J=[];
        $I=0;

        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
            $J[$I]=array(
                "id"=>$Fetch['id'],
                "categoria"=>$Fetch['categoria'],
                "descricao"=>$Fetch['descricao'],
                "preco"=>$Fetch['preco'],
                "preco_venda"=>$Fetch['preco_venda'],
                "imagem"=>$Fetch['imagem']

            );          
            $I++;
        }   
        echo(json_encode($J));
        
    }

}