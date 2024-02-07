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
    <form action="deletar.php" method="post">
<center>
    <h3>CONFIRMAR</h3><br>
    <input type ="hidden" name="id" method="post"

    <p> você tem certeza que vai deletar?</p>
    <?php
      $id=$_POST['id'];
      ?>
      <input type ="hidden" name="id" value=<?php echo $id;?>>

    <button type="submit" name="excluir" onclick="return confirm('Tem certeza que deseja excluir os dados?')">Excluir</button>
    <script>
        function confirmarExclusao(){
            return confirm("Tem certeza que deseja excluir?");
        }
</script>


    </form>


    <?php
    $servername="localhost";
    $database="mini_mundo";
    $username="root";
    $password="123456";


    $con=mysqli_connect($servername,$username,$password,$database);

    if($con){
        die(mysqli_connect_error());
    }
    echo "successfully";


    echo "<script>
             function confirmarExclusao() {
                return confirm('Tem certeza que deseja excluir?');
             }
             </script>";
    header("Location:/var/www/html/beatriz/objtorientacao/P.WEB/deletar.php");

?>

            </center>
            </html>