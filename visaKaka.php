<?php
// Set the cookie
$value = 'something from somewhere';

$output = null;
if(isset($_GET['set'])) {
  setcookie("TestCookie1", $value);
  setcookie("TestCookie2", $value, time()+3600);
  $output = "<p>Skapade två cookies med namn TestCookie1 och TestCookie2. 
  	<a href='?''>Ladda om sidan för att se dem</a>.</p>";
}
else if(isset($_GET['reset'])) {
  // Set time in past to trigger removal of cookie in browser
  setcookie("TestCookie1", "", time()-3600);
  setcookie("TestCookie2", "", time()-3600); 
  $output = "<p>Raderade två cookies med namn TestCookie1 och TestCookie2. 
  	<a href='?'>Ladda om sidan för att se att de inte finns kvar</a>.</p>";
}

echo "<p>Allt innehåll i arrayen \$_COOKIE:<br><pre>" . htmlentities(print_r($_COOKIE, 1)) . "</pre>";
?>

<p><a href="?">Ladda om sidan</a> | <a href="?set">Skapa cookie</a> | <a href="?reset">Ta bort cookie</a></p>
<?=$output?>


