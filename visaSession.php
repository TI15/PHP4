<?php

session_start();

if(isset($_SESSION['count'])) {
  $_SESSION['count']++;
}
else {
  $_SESSION['count'] = 0;
}

if(isset($_GET['reset'])) {
  $_SESSION['count'] = 0;
}

echo "<p>Allt innehåll i arrayen \$_SESSION:<br><pre>" . htmlentities(print_r($_SESSION, 1)) . "</pre>";
?>

<p><a href="?">Ladda om sidan och öka variabeln med ett</a> | <a href="?reset">Nollställ variabeln</a></p>




