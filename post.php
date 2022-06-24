<?php
   if( isset($_POST["name"]) || isset($_POST["age"]) ) {
      echo "<h2>";
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['age']. " years old.";
      echo "</h2>";
      exit();
   }
?>