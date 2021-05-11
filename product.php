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
<div class="na">
<a href = "logout.php"><b><font face="Monaco">SIGN OUT</font></b></a>
</div>

<header>

<h1>BAKERY SHOP</h1>

</header>

<div class="navbar">
<a ref=""><font size="5" face="papyrus">Sweet & Tasty</font></a>
</div>
</br>

<font face="Apple Chancery" size="6" color="#e67300">Enjoy the fresh and home-made delicacies</font>
</br>

<form action="#" method="post">
<b><font face="Century Gothic">ID of Product To Be Displayed:</font></b><input type="text" name="name">
<input type="submit"/>
</form >

<?php 
if ( echo$_GET["name"] === 111 ){
include 'cookiesfile2.html';

}

if ( echo$_GET["name"] === 222 ){
include 'cakefile2.html';

}

if ( echo$_GET["name"] === 333 ){ 
include 'piefile2.html';

}

if ( echo$_GET["name"] !== 111 || echo$_GET["name"] !== 222 || echo$_GET["name"] !== 333 ){ 
echo "No such product available at the shop";

}

?>

<center><b><u><font face="Century Gothic">WISHLIST</font></u></b></center>
</br>
<form action="wishlist.php" method="post">
<font face="Rockwell" color="#806000"><input type="checkbox" name="list" value="Cookies"><label> Cookies</label></br>
<input type="checkbox" name="list" value="Chocolate Cake"><label> Chocolate Cake</label><br/>
<input type="checkbox" name="list" value="Apple"><label> Apple Pie</label></br></font>
<input type="submit" name="submit" value="Create Wishlist">
</form>

</body>  
</html>