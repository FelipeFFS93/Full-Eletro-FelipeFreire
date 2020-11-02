<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "full_stack_eletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <?php
    echo '<link rel="stylesheet" href="../CSS/Estilo.css">';
    ?>

</head>

<body>

   <!-- Inicio do menu -->
   <?php
      include_once('Menu.html');
   ?>
    <!-- Fim do menu -->

    <header>
        <h2>Contato</h2>
        <hr>
    </header>
    <section class="contato">
        <div class="email">
            <img src="../IMG/Contatoimg.png" alt="Email">
            <p>contato@fullstackeletro.com</p>
        </div>
        <div class="whatsapp">
            <img src="../IMG/Whatsapp.png" alt="Whatsapp">
            <p>(11) 99999-9999</p>
        </div>              
    </section>  

    <form method="post" action="">
        <h4>Nome: </h4>
        <input class="inputNome" type="text" name="nome">
        <h4>Mensagem: </h4>
        <input class="textoArea" name="msg" type="textarea"><br>
        <input class="botao" type="submit" value="Enviar">
    </form>

    <?php

        $sql = "select * from comentarios";
        $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        while($rows = $result->fetch_assoc()){
            echo "Data: ", $rows['data'], "<br>";
            echo "Nome: ", $rows['nome'], "<br>";
            echo "Mensagem: ", $rows['msg'], "<br>";
            echo "<hr>";
         }
    }
        else {
            echo "Nenhum comentário ainda!";
    }
    ?>

    </div>
    <footer class="divPagamentos">
        <h4>
           Formas de Pagamento!
        </h4>
        <img class="imgPagamentos" src="../IMG/pagamentos-bandeiras-01.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
     </footer>
</body>

</html>