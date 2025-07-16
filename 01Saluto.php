  <form method="post">
    Nome: <input type="text" name="nome"><br>
    Cognome: <input type="text" name="cognome"><br>
    <input type="submit" value="Saluta">
  </form>
  <?php
  if (isset($_POST['nome']) && isset($_POST['cognome'])) {
      $nome = htmlspecialchars($_POST['nome']);
      $cognome = htmlspecialchars($_POST['cognome']);
      echo "<h2>Ciao $nome $cognome!</h2>";
  }
  ?>
