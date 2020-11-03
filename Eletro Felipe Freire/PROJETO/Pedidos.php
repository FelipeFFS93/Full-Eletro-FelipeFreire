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

    if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['pedido'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $pedido = $_POST['pedido'];

        $sql = "insert into pedidos (nome, endereco, pedido) values ('$nome', '$endereco', '$pedido')";
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
        <h2>Pedidos</h2>
        <hr>
    </header>
    </section>  

    <form method="post" action="">
        <h4>Nome: </h4>
        <input class="inputNome" type="text" name="nome">
        <h4>Endereço: </h4>
        <input class="inputNome" name="endereco" type="textarea"><br>
        <h4>Pedido: </h4>
        <input class="textoArea" name="pedido" type="textarea"><br>
        <input class="botao" type="submit" value="Enviar">
    </form>

    <?php

        $sql = "select * from pedidos";
        $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        while($rows = $result->fetch_assoc()){
            echo "Data: ", $rows['data'], "<br>";
            echo "Nome: ", $rows['nome'], "<br>";
            echo "Endereço: ", $rows['endereco'], "<br>";
            echo "Pedido: ", $rows['pedido'], "<br>";
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