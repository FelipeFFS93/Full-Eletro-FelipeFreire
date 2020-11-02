<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
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

    <main class="textoPagina">
        <h2>
        Seja bem vindo(a)!
        </h2>
        <p>Aqui nessa loja, <em>programadores tem desconto</em> nos produtos para sua casa!</p>
    </main>

    <footer id="idPagamentos">
        <h4>
           Formas de Pagamento!
        </h4>
        <img class="imgPagamentos" src="../IMG/pagamentos-bandeiras-01.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
     </footer>
</body>

</html>