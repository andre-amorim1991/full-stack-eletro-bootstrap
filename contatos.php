<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
    }

    if (isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];
       
       $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
       $result = $conn->query($sql);
    }
?>

<!DOCTYPE HTML>
<html lang=PT-BR>

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/stilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>

<body>
    <header>
        <!-- Menu -->
        <?php
            include_once('menu.html');
        ?>
    </header> 
    <div class="container-sm">  
        <div class="principal">
            <main>
                <h2>Bem Vindo(a)</h2>
                <br>
                <p>A maior loja de eletrodoméstico on-line do Brasil.<br>
                    <em>Aqui Programadores tem <b>descontos</b> especias para toda sua casa!</em></p><br>
            
                <br>
            </main>
        </div>
    </div>
    <div class="container-sm">
        <section class="contato">
            <table class="table">
                <tr>
                    <td class="email">
                        <img src="img/logo-email.png" alt="E-mail" width="40px">
                        contato@fullstackeletro.com
                    </td>
                    <td class="whatsapp">
                        <img src="img/whatsapp-logo.png" alt="contato" width="40px">
                        (11) 98765-4321
                    </td>
                </tr>
            </table>
        </section>

        <form method="post" action="">
            <div class="form-group">
                <h4>Nome: </h4>
                <input class="input-group" type="text" name="nome" style="width: 400px;" placeholder="Digite aqui seu nome">
                <br>
                <h4>Mensagem: </h4>
                <br>
                <textarea class="input-group" style="width: 400px" name="msg" value="Enviar" placeholder="Digite aqui sua mensagem"></textarea>
                <br>
                <button class="btn btn-danger" type="submit" name="submit"style="width:150px">Enviar</button>
        </div>
    </form>
    </div>


    <?php

        $sql = "select * from comentarios";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            echo"Data: ",$rows['data'], "</br>";
            echo"Nome: ",$rows['nome'], "</br>";
            echo"Mensagem: ",$rows['msg'], "</br>";
            echo"<hr>";
        }
        } else {
            echo"Nenhum comentário ainda!";
        }
    ?>
        
    
</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" style="width: 500px;"> </a>
    <p>&copy; Recode Pro 2020<br>
    desenvolvido por André Amorim</p>
</footer>

</html>