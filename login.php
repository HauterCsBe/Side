<html>
<head>
<title>Login</title>
</head>
<body text="#000000" bgcolor="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000">


<br><br>



<?php

$username = $_POST["username"];
$passwort = $_POST["password"];
$passwort = md5($passwort);
$log=0;

$userdatei = fopen ("user.txt","r");
while (!feof($userdatei))
   {
   $zeile = fgets($userdatei,500);
   $userdata = explode("|", $zeile);

   if ($userdata[0]==$username and $passwort==trim($userdata[1]))
      {
      echo "Hallo $username";
      $log = 1;
      }
   }
fclose($userdatei);

if ($log==0)
   {
   echo "Zugriff verweigert <a href=\"login.html\">Zur&uuml;ck</a>";
   }


?>
<br>
<form action="index.html" method="post" name="form1">
<input type="submit" value="Abmelden">
</form>






</body>
</html>
