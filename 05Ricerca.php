  <form method="get">
    Cerca: <input type="text" name="termine">
    <input type="submit" value="Cerca">
  </form>
  <?php
  if (isset($_GET['termine'])) {
      $t = htmlspecialchars($_GET['termine']);
      echo "<h2>Hai cercato: $t</h2>";
  }
  ?>

