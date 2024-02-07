 <?php
$num1=$_POST["valor1"];
$num2=$_POST["valor2"];
$num3=$_POST["valor3"];

if($num1<$num2 && $num2<$num3){
    echo "O $num1 é o menor.<br>";
    echo "O $num3 é o maior";

}if($num2<$num3 && $num1<$num3){
    echo "O $num2 é o menor.<br>";
    echo "O $num3 é o maior ";

}if($num3<$num2 && $num2<$num1){
    echo "O $num3 é o menor .<br>";
    echo "O $num1 é o maior ";

}if($num1<$num3 && $num3<$num2){
    echo "O $num1 é o menor .<br>";
    echo "O $num2 é o maior ";

}if($num1>$num2 && $num2<$num3){
    echo "O $num2 é o menor .<br>";
    echo "O $num1 é o maior ";

}if($num3<$num1 && $num1<$num2){
    echo "O $num3 é o menor .<br>";
    echo "O $num2 é o maior ";
}
 ?>
