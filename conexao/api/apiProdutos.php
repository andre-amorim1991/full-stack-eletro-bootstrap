<?php

    header("Access-Control-Allow-Origin:*");
    header("Control-type: application/json");

    include("produtosApi.php");
    
    $produtos=new produtosApi();
    $produtos-> exibeProdutos();
    