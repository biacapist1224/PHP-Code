<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet">
    <title>DOCUMENTO</title>
  </head>
  <body>
    <form action="bancodedados.php" method="POST">
    <label> FORMULÁRIO:</label><br>
    <input type="text" name="nome" placeholder="nome"><br>
    <br>
    <input type="number" name="id" placeholder="id"><br>
    <br>
    <input type="submit" value="enviar">
    <br>
    <input type="submit" value="deletar">



<?php 

$nome=$_POST["nome"];
$id=$_POST["id"];


$servename= "localhost";
$database = "mini_mundo";
$username="root";
$password ="123456";


$conn = mysqli_connect($servename,$username,$password);
if(!$conn){
  die("conection failed:". mysqli_connect_error());
}
echo "connected successfully";


$query="SELECT * from CLIENTE";
$insere="INSERT INTO CLIENTE VALUES ('$id', '$nome')";
mysqli_query($conn,$insere);
$result = mysqli_query($conn,$query);
   if(mysqli_num_rows($result) > 0);
       echo "<table border='1'>";
       echo "<tr>";
       echo "<th>nome</th>";
       echo "<th>ID</th>";
       echo "<th>deletar</th>";
         echo "</tr>";
      
      while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
         echo "<td>" . $row['id'] . "</td>";
         echo "<td>" . $row['nome']. "</td>";
         echo "<Form action='deletar.php' method='POST'>
              <button type='submit' name='id' value=".$row['id'].">x</button></center>
         </form>
         </td>
         </tr>";
     
    }
    echo "</table>";


    
    $nome=$_POST["nome"];
    $id=$_POST["id"];



    $sql= "INSERT INTO CLIENTE VALUES('$id','$nome')";
    $mysqli_query($conn,$sql) or die ("erro");
    $result=$mysqli_query($conn,$query);
    $mysqli_close($con);
    echo "cliente cadastrado";

    /*if (isset($_POST['id'])){
      $id=$_POST['id'];
      $deleta=mysqli_query($con,"DELETE FROM CLIENTE WHERE id='$id')";
    }
  
    */
?>

  </body>
  </html>

