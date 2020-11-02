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

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <?php
    echo '<link rel="stylesheet" href="../CSS/Estilo.css">';
    ?>
    <script src="../JS/Funcoes.js"></script>
</head>

<body>

    <!-- Inicio do menu -->
    <?php
      include_once('Menu.html');
    ?>
    <!-- Fim do menu -->

    <header>
        <h2>Produtos</h2>
        <hr>
    </header>
       
    <section class="categorias">
        <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodos()">Todos (12)</li>
                <li onclick="exibirCategorias('geladeira')">Geladeiras (3)</li>
                <li onclick="exibirCategorias('fogao')">Fogões (2)</li>
                <li onclick="exibirCategorias('microondas')">Microondas (3)</li>
                <li onclick="exibirCategorias('lavaroupa')">Lavadoura de Roupas (2)</li>
                <li onclick="exibirCategorias('lavalouca')">Lava-Louças (2)</li>
            </ul>
    </section>
    <section class="produtos">

    <?php

    $sql = "select * from produto";
    $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        while($rows = $result->fetch_assoc()){
            
    ?>

    
        <div class="caixaProdutos" id="<?php echo $rows["categoria"]; ?>">
            <img class="imgItens" src="<?php echo $rows["imagem"]; ?>" onclick="destaque(this)" alt="Geladeira Brastemp Top de linha">
            <br>
            <p class="descricaoItens"><?php echo $rows["descricao"]; ?></p>
            <p class="precoRiscado"><?php echo "R$ " . $rows["preco"]; ?></p>
            <p class="preco"><?php echo "R$ " . $rows["precofinal"]; ?></p>
            <hr>
        </div>

    <?php
        }
    }
    else {
        echo "Nenhum produto cadastrado!";
    }
    ?>
    

        
    </section>               

    <footer class="divPagamentos">
        <h4>
           Formas de Pagamento!
        </h4>
        <img class="imgPagamentos" src="../IMG/pagamentos-bandeiras-01.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
     </footer>
</body>

</html>