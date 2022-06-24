<?php
   $name ="";
   $age ="";
   if( isset($_GET["name"]) != "" || isset($_GET["age"]) != "") {
      $name = $_GET["name"];
      $age  = $_GET["age"];
     
      echo "Welcome ". $name. "<br>";
      echo "You are ". $age. " years old.<br>";
      if ($age > 50 && $nama == "" )
      {
         echo "you are to old <br>";
      }
      else
      {
         echo "you are stil young <br>";
      }
      for ($i = 0; $i <= $age ;$i ++){
         $s=0;
         $dot="";
         while ($s<=$i){
         $dot .= ".";
         $s++;
         }
         echo($dot);
         echo("<br>");
      }
      exit();
   }
 
?>
