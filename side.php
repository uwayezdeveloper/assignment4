<?php
for($i=1;$i<=5;$i++) { 
   for ($j=1;$j<=$i;$j++) { 
   echo "*";
   }
   echo("<br>");
   if($i==5){
    for($i=1;$i<=5;$i++) { 
        for ($j=5;$j>=$i;$j--) { 
        echo "*";
        }
        echo("<br>");
     }
   }
}
?>