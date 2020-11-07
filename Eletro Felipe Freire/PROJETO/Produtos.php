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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="../JS/Funcoes.js"></script>
    
</head>

<body>
    <div class="container-fluid">
    <!-- Inicio do menu -->
            <?php
                include_once('Menu.html');
            ?>
    <!-- Fim do menu -->

     <header>
        <h2 class="display-5">Produtos</h2>
        <hr>
    </header>
    </div>
       
    <div class="container-fluid">
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
    </div>

    <section class="produtos bg-white">

    <?php

    $sql = "select * from produto";
    $result = $conn->query($sql);

    if($result->num_rows > 0){ 
        while($rows = $result->fetch_assoc()){
            
    ?>

    
        <div class="caixaProdutos bg-white" id="<?php echo $rows["categoria"]; ?>">
            <img class="imgItens img-fluid" src="<?php echo $rows["imagem"]; ?>" onclick="destaque(this)" alt="Geladeira Brastemp Top de linha">
            <br>
            <p class="descricaoItens"><?php echo $rows["descricao"]; ?></p>
            <p class="precoRiscado"><?php echo "R$ " . $rows["preco"]; ?></p>
            <p class="text-danger"><?php echo "R$ " . $rows["precofinal"]; ?></p>
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

    <div class="container">  
        <footer class="divPagamentos">
            <h4 class="text-danger">
            Formas de Pagamento!
            </h4>
            <img class="imgPagamentos" src="../IMG/pagamentos-bandeiras-01.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>