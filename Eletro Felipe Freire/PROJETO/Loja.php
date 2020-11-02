<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas Lojas</title>
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
        <h2>Nossas Lojas</h2>
        <hr>
    </header>
   
    <section class="nossasLojas">
       <div class="lojas">
            <h3>Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
       </div> 
       <div class="lojas">
            <h3>São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div> 
        <div class="lojas">
            <h3>Santa Catarina</h3>
            <p>Rua Major &Aacute;vila, 370</p>
            <p>Vila Mariana</p>
            <p>Centro</p>
            <p>(47) 5555-5555</p>
        </div> 
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