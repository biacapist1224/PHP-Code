 <?php
 $menor=$_POST['valor1'];
 $meio=$_POST['valor2'];
 $maior=$_POST['valor3'];

 if($maior < $menor){
    $temp=$menor;
    $menor=$meio;
    $meio=$temp;
 }

 if($maior < $menor){
    $temp=$menor;
    $menor=$maior;
    $maior=$temp;
 }

 if($maior < $meio){
    $temp=$meio;
    $meio=$maior;
    $maior=$temp;
 }

 echo " $menor - $meio - $maior";


 ?>