<?php

    header("Access-Control-Allow-Origin:*");
    header("Control-type: application/json");

    include("comentariosApi.php");

    $comentarios=new comentariosApi();
    $comentarios-> exibeComentarios();