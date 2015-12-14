<html>
<head>
<title>Neuen Benutzernamen Registieren></title>
<meta name="author" content="Andavos">
<meta name="generator" content="Symtec Development Studio 2.0">
</head>
<body text="#000000" bgcolor="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000">


<?php
$username = $_POST["username"];
$password = $_POST["passwort"];
$password2 = $_POST["passwort2"];



if ($password == $password2)
   {
   $user_vorhanden = array();
   $passwort = md5($password);


   $userdatei = fopen ("user.txt","r");
   while (!feof($userdatei))
      {
      $zeile = fgets($userdatei,500);
      $userdata = explode("|", $zeile);
      array_push ($user_vorhanden,$userdata[0]);
      }
   fclose($userdatei);



   if (in_array($username,$user_vorhanden))
      {
      echo "Username schon vorhanden <br> <a href=\"index.html\">zur&uuml;ck</a>";
      }

   else
      {
      $userdatei = fopen("user.txt","a");
      lfwrite($userdatei, "\n");
      fwrite($userdatei, $username);
      fwrite($userdatei, "|");
      fwrite($userdatei, md5($password));
      fclose($userdatei);
      echo "$username, deine Anmeldung war erfolgreich<br><a href=\"index.html\">zum Login</a>";
      }
   }

else
  {
  echo "Die Passw&ouml;rter sind nicht identisch<br> <a href=\"index.html\">zur&uuml;ck</a> ";
  }

?>












</body>
</html>









