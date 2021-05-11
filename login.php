<?php
session_start();
?>
<?php
      if(isset($_POST["Submit"])){
        $username = $_POST["id"];
        $password = $_POST["password"];
        if($username === "admin" && $password === "password"){
          header("Location: product.php");
          $_SESSION["login"] = "true";
        } 
        
        else {
          echo "Username and Password are not valid";
        }

      }
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
   <script>
    alert('Enable cookies when using this website. Username and password are at the bottom of the page.');
   </script>
      <link rel="stylesheet" type="text/css" href="main.css">
   </head>
   
<body>
<div class="c">

<font face="papyrus" color="brown" size="40px">BAKERY SHOP LOGIN FORM</font>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    
    <font face="Monaco">Username:</font><input type="text" name="id" id="id"></br>
    <font face="Monaco">Password:</font><input type="password" name="password" id="password"></br>
				
    <input type="submit" value="Login" name="Submit">
  
</form>
</div>

</body>

<footer><font face="Monaco">For all users to log in: Username = admin, Password = password</font></footer>
</html>
