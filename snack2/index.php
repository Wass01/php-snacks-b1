<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
  $email = $_GET['mail'];
  $nome = $_GET['name'];
  $eta = $_GET['age'];

  // posso utilizzare anche il strpos

  if(filter_var($email, FILTER_VALIDATE_EMAIL) &&
  filter_var($eta, FILTER_VALIDATE_INT) && (strlen($nome) > 3)){
    echo("Accesso riuscito");
  } else {
    echo("Accesso negato");
  }
?>

<p>email: <?php echo $email ?></p>
<p>nome: <?php echo $nome ?></p>
<p>età: <?php echo $eta ?></p>
