// Name:Annauth Muditaa, Username:ma17jq, Id:6334965
#!/usr/bin/php-cgi
<?php
   session_start();
   if(!isset($_SESSION['login'])) {
      header('Location:login.php'); 
      die();
    }
?>