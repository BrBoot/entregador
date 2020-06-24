
<?php
#require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&family=Ubuntu:wght@400&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="imagens/favicon.svg" type="image/x-svg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsividade.css">
  <script src="https://kit.fontawesome.com/dbd07a4d89.js" crossorigin="anonymous"></script>
  <title>Entregador</title>
</head>
<body>

<header>
  <div class="cabecalho">
    <img src="imagens/foto.jpg" alt="Foto">
    <h1>Eduardo Alexandre da Silva</h1>
    <p>Trabalhando com entregas com moto ou se houver a necessidade, com carro. Entregas em: Campinas, Paulínia, Cosmopólis, Sumaré, Hortolândia, Monte Mor, Limeira, Americana, Santa Barbara d' Oeste, Valinhos, Vinhedo, Louveira, Jundiaí, Jaguariúna, Holambra, Pedreira, Amparo, Águas de Lindóia, Lindóia, Serra Negra, Espirito Santo do Pinhal... faço entregas em um raio de aproximadamente 160km. Você que precisa entregar suas mercadorias aos seus clientes entre em contato no formulário abaixo:</p>
  </div>
</header>

<main>
  <div id="page-form">
    <form action="enviar.php" method="POST" >

    <?php
      if (!empty($success)) {
    ?>
      <p class="success">Mensagem enviada com sucesso!</p>
      <?php
    }
    ?>

    <?php
      if (!empty($error)) {
    ?>
      <p class="error">Mensagem não enviada! <?= $error ?></p>
      <?php
      }
      ?>
    
      <div class="field-group">
        <div class="field">
          <label for="name">Nome:</label>
          <input type="text" name="name" placeholder="Nome" required="required">      
        </div>

        <div class="field">
          <label for="email">E-mail:</label>
          <input type="email" name="email" placeholder="E-mail" required="required">      
        </div>

        <div class="field">
          <label for="telefone">Telefone(whatsapp):</label>
          <input type="text" placeholder="(xx)xxxxx-xxxx" name="telefone" required="required">      
        </div>

        <div class="field">
          <label for="name">Uma breve descrição do que procura/precisa:</label>
          <textarea name="escreva" placeholder="Escreva sua mensagem" cols="30" rows="10"></textarea>      
        </div>        
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>  
</main>

<footer>
  <div id="contatos">
    <p>Desenvolvido por Eduardo Alexandre da Silva<p>
    <span>
      <a href="https://www.linkedin.com/in/eduardo-alexandre-da-silva-98a5a0b8/" target="_blank">
        <img src="imagens/linkedin.svg" alt="Linkedin">
      </a>
    </span>

    <span>
      <a href="https://github.com/BrBoot" target="_blank">
        <img src="imagens/github.svg" alt="Github">
      </a>
    </span>

    <span>
      <a href="https://www.instagram.com/brboot/" target="_blank">
        <img src="imagens/instagram.svg" alt="Instagram">
      </a>
    </span>

    <span>
      <a href="https://www.facebook.com/eduardo.br08?ref=bookmarks" target="_blank">
        <img src="imagens/facebook.svg" alt="Facebook">
      </a>
    </span>
  </div>    
</footer>
  
</body>
</html>