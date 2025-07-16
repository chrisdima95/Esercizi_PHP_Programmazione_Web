  <form method="post">
    Anno di nascita: <input type="number" name="anno"><br>
    <input type="submit" value="Calcola età">
  </form>
  <?php
  if (isset($_POST['anno'])) {
      $anno = (int) $_POST['anno'];
      $annoCorrente = date('Y');
      $eta = $annoCorrente - $anno;
      echo "<h2>Hai $eta anni!</h2>";
  }
  ?>
