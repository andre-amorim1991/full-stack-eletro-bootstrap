<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    //Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    //verificando a conexão
    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
    }


    // setLocale(LC_MONETARY, 'PT_BR');

    $sql = "select * from produtos";
    $result = $conn->query($sql);
    
    echo"<pre>";
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    echo"Aqui era pra esta o resultado";
    echo"</pre>";
    
?>