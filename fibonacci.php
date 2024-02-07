 <?php
$aux;
$repetir=$_POST["repetir"];
$a=1; $b=0;

for($i=0; $i<$repetir; $i++){
    echo $a."-";
    $aux=$a;
    $a=$a+$b;
    $b=$aux;
    }
    echo "...";
?>
