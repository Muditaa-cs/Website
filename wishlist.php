<?php
   include 'check.php';
?>
<?php
$name1 = "cookies";
$name4 = "chocolate";
$name5 = "apple";
if(!empty($_POST["Cookies"])) {
setcookie($name1, time() + (86400 * 30));
$name6 = "Cookies";
if(!empty($_POST["c1"])) {
  $num = $_POST["c1"];
  setcookie("Brown",$num, time() + (86400 * 30));
}
if(!empty($_POST["c2"])) {
  $num = $_POST["c2"];
  setcookie("Butterscotch",$num, time() + (86400 * 30));
}
if(!empty($_POST["c4"])) {
  $num = $_POST["c4"];
  setcookie("Chewy",$num, time() + (86400 * 30));
}
if(!empty($_POST["c5"])) {
  $num = $_POST["c5"];
  setcookie("Caramel",$num, time() + (86400 * 30));
}
}
if(!empty($_POST["Cookies1"])) {
setcookie($name4, time() + (86400 * 30));
$name7 = "Chocolate Cake";
if(!empty($_POST["d1"])) {
  $num = $_POST["d1"];
  setcookie("Choco1",$num, time() + (86400 * 30));
}
if(!empty($_POST["d2"])) {
  $num = $_POST["d2"];
  setcookie("Choco2",$num, time() + (86400 * 30));
}
if(!empty($_POST["d4"])) {
  $num = $_POST["d4"];
  setcookie("Choco4",$num, time() + (86400 * 30));
}
if(!empty($_POST["d5"])) {
  $num = $_POST["d5"];
  setcookie("Choco5",$num, time() + (86400 * 30));
}
}
if(!empty($_POST["Cookies2"])) {
setcookie($name5, time() + (86400 * 30));
$name8 = "Apple Pie";
if(!empty($_POST["e1"])) {
  $num = $_POST["e1"];
  setcookie("Mini",$num, time() + (86400 * 30));
}
if(!empty($_POST["e2"])) {
  $num = $_POST["e2"];
  setcookie("Full",$num, time() + (86400 * 30));
}
}
if(empty($_POST["Cookies"]) && isset($_COOKIE[$name1])) {
$name6 = "Cookies";
}
if(empty($_POST["Cookies1"]) && isset($_COOKIE[$name4])) {
$name7 = "Chocolate Cake";
}
if(empty($_POST["Cookies2"]) && isset($_COOKIE[$name5])) {
$name8 = "Apple Pie";
}
?>
<?php
if(isset($_POST["Submit5"])){
   if (!empty($_POST["m1"])) {
    setcookie("Brown","", time() - (3600));
    header("Location: wishlist.php");
   }
   
   if (!empty($_POST["m2"])) {
    setcookie("Butterscotch","", time() - (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["m3"])) {
    setcookie("Chewy","", time() - (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["m4"])) {
    setcookie("Caramel","", time() + (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["n1"])) {
    setcookie("Choco1","", time() - (3600));
    header("Location: wishlist.php");
   }
   
   if (!empty($_POST["n2"])) {
    setcookie("Choco2","", time() - (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["n3"])) {
    setcookie("Choco4","", time() - (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["n4"])) {
    setcookie("Choco5","", time() + (86400 * 30));
    header("Location: wishlist.php");
   }

   if (!empty($_POST["q1"])) {
    setcookie("Mini","", time() - (3600));
    header("Location: wishlist.php");
   }
   
   if (!empty($_POST["q2"])) {
    setcookie("Full","", time() - (86400 * 30));
    header("Location: wishlist.php");
   }
}
?>
<html>
  <body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>

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

<font face="papyrus" color="brown">You have chosen the following product to be in your Wishlist:</font>
<br>
<div class = "m"><?php echo $name6 ?></br></div></br>

<div class = "n">
<?php
$total = 0;
$price1 = 1.5;
$price2 = 2;
$price3 = 40;
$price4 = 45;
$price5 = 50;
$price6 = 5;
$price7 = 20;
if($name6 != ""){
  if(!empty($_POST["c1"])) {
    $num = $_POST["c1"];
    $total = $total + ($num*$price1);
    echo "Browned Butter Chocolate Chip Cookies--". $num . "<br>";
  }
  if(!empty($_POST["c2"])) {
    $num = $_POST["c2"];
    $total = $total + ($num*$price1);
    echo "Butterscotch Oatmeal Cookies--". $num . "<br>";
  }
  if(!empty($_POST["c4"])) {
    $num = $_POST["c4"];
    $total = $total + ($num*$price1);
    echo "Chewy Chocolate Sugar Cookies--". $num . "<br>";
  }
  if(!empty($_POST["c5"])) {
    $num = $_POST["c5"];
    $total = $total + ($num*$price2);
    echo "Chocolate Caramel Thumbprint Cookies--". $num . "<br>";
  }
  if(isset($_COOKIE["Brown"]) && empty($_POST["c1"])) {
    $num = $_COOKIE["Brown"];
    $total = $total + ($num*$price1);
    echo "Browned Butter Chocolate Chip Cookies--". $_COOKIE["Brown"] . "<br>";
  }
  if(isset($_COOKIE["Butterscotch"]) && empty($_POST["c2"])) {
    $num = $_COOKIE["Butterscotch"];
    $total = $total + ($num*$price1);
    echo "Butterscotch Oatmeal Cookies--". $_COOKIE["Butterscotch"] . "<br>";
  }
  if(isset($_COOKIE["Chewy"]) && empty($_POST["c4"])) {
    $num = $_COOKIE["Chewy"];
    $total = $total + ($num*$price1);
    echo "Chewy Chocolate Sugar Cookies--". $_COOKIE["Chewy"] . "<br>";
  }
  if(isset($_COOKIE["Caramel"]) && empty($_POST["c5"])) {
    $num = $_COOKIE["Caramel"];
    $total = $total + ($num*$price2);
    echo "Chocolate Caramel Thumbprint Cookies--". $_COOKIE["Caramel"] . "<br>";
  }
}
?>
</div></br>

<div class = "m"><?php echo $name7 ?></br></div></br>

<div class = "n">
<?php
if($name7 != ""){
  if(!empty($_POST["d1"])) {
    $num = $_POST["d1"];
    $total = $total + ($num*$price3);
    echo "8 inch 3 layer round--". $num . "<br>";
  }
  if(!empty($_POST["d2"])) {
    $num = $_POST["d2"];
    $total = $total + ($num*$price4);
    echo "8 inch 3 layer square--". $num . "<br>";
  }
  if(!empty($_POST["d4"])) {
    $num = $_POST["d4"];
    $total = $total + ($num*$price4);
    echo "10 inch 3 layer round--". $num . "<br>";
  }
  if(!empty($_POST["d5"])) {
    $num = $_POST["d5"];
    $total = $total + ($num*$price5);
    echo "10 inch 3 layer square--". $num . "<br>";
  }
  if(isset($_COOKIE["Choco1"]) && empty($_POST["d1"])) {
    $num = $_COOKIE["Choco1"];
    $total = $total + ($num*$price3);
    echo "8 inch 3 layer round--". $_COOKIE["Choco1"] . "<br>";
  }
  if(isset($_COOKIE["Choco2"]) && empty($_POST["d2"])) {
    $num = $_COOKIE["Choco2"];
    $total = $total + ($num*$price4);
    echo "8 inch 3 layer square--". $_COOKIE["Choco2"] . "<br>";
  }
  if(isset($_COOKIE["Choco4"]) && empty($_POST["d4"])) {
    $num = $_COOKIE["Choco4"];
    $total = $total + ($num*$price4);
    echo "10 inch 3 layer round--". $_COOKIE["Choco4"] . "<br>";
  }
  if(isset($_COOKIE["Choco5"]) && empty($_POST["d5"])) {
    $num = $_COOKIE["Choco5"];
    $total = $total + ($num*$price5);
    echo "10 inch 3 layer square--". $_COOKIE["Choco5"] . "<br>";
  }
}
?>
</div></br>

<div class = "m"><?php echo $name8 ?></br></div></br>

<div class = "n">
<?php
if($name8 != ""){
  if(!empty($_POST["e1"])) {
    $num = $_POST["e1"];
    $total = $total + ($num*$price6);
    echo "Mini Apple Pie (Double Crust or Dutch)--". $num . "<br>";
  }
  if(!empty($_POST["e2"])) {
    $num = $_POST["e2"];
    $total = $total + ($num*$price7);
    echo "Full Apple Pie (Double Crust or Dutch)--". $num . "<br>";
  }
  if(isset($_COOKIE["Mini"]) && empty($_POST["e1"])) {
    $num = $_COOKIE["Mini"];
    $total = $total + ($num*$price6);
    echo "Mini Apple Pie (Double Crust or Dutch)--". $_COOKIE["Mini"] . "<br>";
  }
  if(isset($_COOKIE["Full"]) && empty($_POST["e2"])) {
    $num = $_COOKIE["Full"];
    $total = $total + ($num*$price7);
    echo "Full Apple Pie (Double Crust or Dutch)--". $_COOKIE["Full"] . "<br>";
  }
}
?>
</div></br>

<div class = "m"><u><?php echo "Price: ". $total; ?></u></br></br></div>

<div class = "v">
Remove from Wishlist:</br>
<form action="#" method="post">
  Cookies</br>
  <input type="checkbox" id="m1" name="m1">
  <label> Browned Butter Chocolate Chip Cookies</label></br>
  <input type="checkbox" id="m2" name="m2">
  <label> Butterscotch Oatmeal Cookies</label></br>
  <input type="checkbox" id="m3" name="m3">
  <label> Chewy Chocolate Sugar Cookies</label></br>
  <input type="checkbox" id="m4" name="m4">
  <label> Chocolate Caramel Thumbprint Cookies</label></br></br>

  Chocolate Cake</br>
  <input type="checkbox" id="n1" name="n1">
  <label> 8 inch 3 layer round</label></br>
  <input type="checkbox" id="n2" name="n2">
  <label> 8 inch 3 layer square</label></br>
  <input type="checkbox" id="n3" name="n3">
  <label> 10 inch 3 layer round</label></br>
  <input type="checkbox" id="n4" name="n4">
  <label> 10 inch 3 layer square</label></br></br>

  Chocolate Cake</br>
  <input type="checkbox" id="q1" name="q1">
  <label> Mini Apple Pie (Double Crust or Dutch)</label></br>
  <input type="checkbox" id="q2" name="q2">
  <label> Full Apple Pie (Double Crust or Dutch)</label></br>
  <input type="submit" value="Submit" name="Submit5">
</form>
</div>

<font face = "Comic Sans MS, Comic Sans, cursive">Click to change number of items selected: </font>
<div class="nb">
<font face = "Impact, fantasy">
<a href = "product.php">Return to Product page</a>
</font>
</div>

</body>
</html>