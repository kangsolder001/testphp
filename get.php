
<?php
   $name ="";
   $age ="";
   if( isset($_GET["name"]) != "" || isset($_GET["age"]) != "") {
      $name = $_GET["name"];
      $age  = $_GET["age"];
      echo "<h2>";
      echo "Welcome ". $name. "<br>";
      echo "You are ". $age. " years old.<br>";
      echo "</h2>";
      exit();
   }
 
?>

