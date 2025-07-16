  <form method="post">
    Importo in euro: <input type="number" step="0.01" name="euro"><br>
    <input type="submit" value="Converti">
  </form>
  <?php
  if (isset($_POST['euro'])) {
      $euro = (float) $_POST['euro'];
      $dollari = $euro * 1.10;
      echo "<h2>$euro € = $dollari $</h2>";
  }
  ?>

