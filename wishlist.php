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

<body id ="d">

<a href = "logout.php"><b><font face="Monaco">SIGN OUT</font></b></a>

<header>

<h1>BAKERY SHOP</h1>

</header>

<div class="navbar">
<a ref=""><font size="5" face="papyrus">Sweet & Tasty</font></a>
</div>
</br>

<div class="b">
<b><font face="Century Gothic">Product To Be Removed from Wishlist:</font></b>
cookies:        <input type="checkbox" onclick="F1()">
chocolate_cake: <input type="checkbox" onclick="F2()">
apple_pie:      <input type="checkbox" onclick="F3()">
</div>

<script>
function F1() {
  var s = document.getElementById("d").innerHTML; 
  var r = str.replace("Cookies", "");
  document.getElementById("d").innerHTML = r;
} 

function F2() {
  var s = document.getElementById("d").innerHTML; 
  var r = str.replace("Chocolate Cake", "");
  document.getElementById("d").innerHTML = r;
} 

function F3() {
  var s = document.getElementById("d").innerHTML; 
  var r = str.replace("Apple Pie", "");
  document.getElementById("d").innerHTML = r;
} 

</script>

<font face="papyrus" color="brown">You have chosen the following product to be in your Wishlist:</font>
<br>

<?php
$cookies=0;
$cake=0;
$pie=0;

if(isset($_POST['submit'])){
  if(!empty($_POST['list'])){
   foreach($_POST['list'] as $checked){
    echo $checked."</br>";

    if($checked === "Cookies" ){
    setcookie("p1","Cookies",time()+30*24*60*60);
    $cookies=1;
    
    } 

    if($checked === "Chocolate Cake" ){
    setcookie("p2","Chocolate Cake",time()+30*24*60*60);
    $cakes=1;

    }

    if($checked === "Apple Pie" ){
    setcookie("p3","Apple Pie",time()+30*24*60*60);
    $pie=1;
 
    }

    }
 
  }
}

if(isset($_COOKIE["p1"]) && $cookie===0 ){
    echo $_COOKIE["p1"];
}

if(isset($_COOKIE["p2"]) && $cake===0 ){
    echo $_COOKIE["p2"];
}

if(isset($_COOKIE["p3"]) && $pie===0 ){
    echo $_COOKIE["p3"];
}

?>
</body>
</html>