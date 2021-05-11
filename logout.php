// Name:Annauth Muditaa, Username:ma17jq, ID:6334965
#!/usr/bin/php-cgi
<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>