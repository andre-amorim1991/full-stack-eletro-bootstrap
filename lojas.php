<!DOCTYPE HTML>
<html lang=PT-BR>

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        </div>
    </header>    
    <div class="container-sm">
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
        <table class="table">
            <thead>        
                <tr>
                    <th >Rio de Janeiro</th>
                    <th >São Paulo </th>
                    <th >Belo Horizonte Terreo loja 20</th>                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >Avenida Copa Cabana, 3456</td>
                    <td >Avenida Paulista, 3912</td>
                    <td >Avenida João Pina, 520</td>
                </tr>
                <tr>
                    <td >Copa cabana</td>
                    <td >Bela Vista</td>
                    <td >Assunção</td>
                </tr>
                <tr>
                    <td >(21) 2132-6532Copa</td>
                    <td >(11) 3265-6532</td>
                    <td >(31) 4232-3698</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
<footer class="rodape">
    <h3>Formas de pagamento</h3>
    <a><img src="img/pagamentos.png" style="width: 500px;"> </a>
    <p>&copy; Recode Pro 2020<br>
    desenvolvido por André Amorim</p>

</footer>

</html>