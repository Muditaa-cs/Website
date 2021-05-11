<?php
   include 'check.php';
?>
<?php
if(isset($_POST["Submit1"])){
   $name = $_POST["name"];
   if ($name === "Cookies" ) {
      include "cookiesfile2.html";
      
   }
   
   else if ($name === "Chocolate Cake" ) {
      include "cakefile2.html";
      
   }

   else if ($name === "Apple Pie" ) {
      include "piefile2.html";
      
   }

   else {
     echo "No such product available at the shop";
   }

}
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   
   <body>

<div class="na">
<a href = "logout.php">
<b>
   <div class="l">SIGN OUT</div>
</b>
</a>
</div>

<div class="navbar">
<a ref=""><font size="5" face="papyrus">Bakery Shop: Sweet & Tasty</font></a>
</div>
</br>

<font face="Apple Chancery" size="6" color="#e67300">Enjoy the fresh and home-made delicacies</font></br>

<form action="#" method="post">
  <label for="name"><b><font face="American Typewriter">Product To Be Displayed:</font></b></label>
  <select id="name" name="name">
    <option value="Cookies">Cookies</option>
    <option value="Chocolate Cake">Chocolate Cake</option>
    <option value="Apple Pie">Apple Pie</option>
<input type="submit" name="Submit1">
</form>

<div class="p">
<b><font face="Century Gothic">WISHLIST (Click on checkbox, then choose the number(s) for any item)</font></b></br>

<form action="wishlist.php" method="post">
<font face="Rockwell" color="#806000">

<div class = "row">
<div class = "column">
<div class="t">
   <input type="checkbox" name="Cookies" id="Cookies"><label>Cookies</label>
   <img src = "https://bakerbynature.com/wp-content/uploads/2017/06/everydaychocolatechipcookies12-1-of-1.jpg" width="200" height="200">
</div>
</div>

<div class = "column">
Browned Butter Chocolate Chip Cookies<input type="text" name="c1" id="c1"></br>
Butterscotch Oatmeal Cookies<input type="text" name="c2" id="c2"></br>
Chewy Chocolate Sugar Cookies<input type="text" name="c4" id="c4"></br>
Chocolate Caramel Thumbprint Cookies<input type="text" name="c5" id="c5"></br>
</div>
</div>

<div class = "row">
<div class = "column">
<div class="t">
   <input type="checkbox" name="Cookies1" id="Cookies1"><label>Chocolate Cake</label>
   <img src = "https://lilluna.com/wp-content/uploads/2019/01/Chocolate-Cake103.jpg" width="200" height="200">
</div>
</div>
<div class = "column">
8 inch 3 layer round</br><input type="text" name="d1" id="d1"></br>
8 inch 3 layer square</br><input type="text" name="d2" id="d2"></br>
10 inch 3 layer round</br><input type="text" name="d4" id="d4"></br>
10 inch 3 layer square</br><input type="text" name="d5" id="d5"></br>
</div>
</div>

<div class = "row">
<div class = "column">
<div class="t">
   <input type="checkbox" name="Cookies2" id="Cookies2"><label>Apple Pie</label>
   <img src = "https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/exps6086_HB133235C07_19_4b_WEB.jpg" width="200" height="200">
</div>
</div>
<div class = "column">
Mini Apple Pie (Double Crust or Dutch)</br><input type="text" name="e1" id="e1"></br>
Full Apple Pie (Double Crust or Dutch)</br><input type="text" name="e2" id="e2"></br>
</div>
</div>

<div class = "row">
<div class = "column">
<input type="submit" name="Submit2" value="Create Wishlist">
</div>
</form>
</div>

</body>  
</html>