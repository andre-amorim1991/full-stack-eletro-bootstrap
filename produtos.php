<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("A conexão com BD falhou: " . mysqli_connect_error());
    }
?>


<!DOCTYPE HTML>
<html lang=PT-BR>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="css/stilo.css">
    <script src="js/funcoes.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!-- Menu -->
        <?php
            include_once('menu.html');
        ?>
    </header>
    
    
    <div class="comtainer-sm" >
        <div class="principal">
            <main>
                <h2>Bem Vindo(a)</h2>
                <br>
                <p>A maior loja de eletrodoméstico on-line do Brasil.<br>
                    <em>Aqui Programadores tem <b>descontos</b> especias para toda sua casa!</em></p><br>
                <hr>
                <br>
            </main>
        </div>
    </div>

    <div class="container-sm">
        <ul class="list-group-flush">
            <div class="row"><li onclick="exibir_todos()">Todos (12)</li></div>
            <div class="row"><li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li></div>
            <div class="row"><li onclick="exibir_categoria('fogao')">Fogões (2)</li></div>
            <div class="row"><li onclick="exibir_categoria('microondas')">Microondas (3)</li></div>
            <div class="row"><li onclick="exibir_categoria('lavaroupas')">Lava roupas (2)</li></div>
            <div class="row"><li onclick="exibir_categoria('lavaloucas')">Lava louças(2)</li></div>
        </ul>
    </div>
    <div class="container-sm">
        <?php
        
        $sql = "select * from produtos";
        $result = $conn->query($sql);
    
        if($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()){

        ?>
        <div class="produtos" id="<?php echo $rows["categoria"];?>">
            <p class="geladeira"><img src="<?php echo $rows["imagem"];?>" alt="geladeira Consul prata" width="140px"
                height="140px" onmouseover="destaque(this)" onmouseout="destaque(this)" ></p>
            <p class="descricao"><?php echo $rows["descricao"];?></p>
            <p class="precoantigo">R$ <?php echo $rows["preco"];?></p>
            <p class="preconovo">R$ <?php echo $rows["preco_venda"];?></p>
            <hr>
            <br>
        </div>

        <?php
                }
        }else {
            echo "Nenhum produto cadastrado!";
        }
        
        ?>
    </div>       
</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" width="500px"> </a>
    <p>&copy; Recode Pro 2020<br>
        desenvolvido por André Amorim</p>

</footer>

</html>