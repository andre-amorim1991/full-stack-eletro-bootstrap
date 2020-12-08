<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    $tabela = $_GET['table'];

    //Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    //verificando a conexão
    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
    }

    setlocale(LC_MONETARY, 'pt_BR');

    $sql = "select * from $tabela";
    $result = $conn->query($sql);
    
    
    print_r( json_encode($result->fetch_all(MYSQLI_ASSOC)));
    
    
    
?>