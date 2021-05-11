// Name:Annauth Muditaa, Username:ma17jq, ID:6334965
#!/usr/bin/php-cgi
<?php
   include 'check.php';
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
<body>

 <?php
      if(isset($_POST['submit'])){
        $username = $_POST['id']; 
        $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; 
          header('Location:product.php'); 
          die();
        } 
        
        else {
          echo "Username and Password are not valid";
        }

      }
    ?>

<h2><font face="papyrus" color="brown">BAKERY SHOP LOGIN FORM</font></h2>
    <form id="login" method="post" action="#" >
    
    <dd><font face="Monaco">Username:</font><input type="text" name="id" id="id"></dd>
    <dd><font face="Monaco">Password:</font><input type="password" name="password" id="password"></dd>
				
    <dd><input type="submit" value="Login"></dd>

    </form>

</body>

<footer><font face="Monaco">For all users to log in: Username=admin, Password=password</font></footer>
</html>
