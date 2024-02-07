<?php
$servename= "localhost";
$database= "mini_mundo";
$username="root";
$password ="123456";

//create connection
$conn=mysqli_connect($servename,$database,$username,$password);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
//sql to delete a record 

$sql = "DELETE FROM CLIENTE WHERE id=3";

if($con->query($sql)===TRUE){
    echo "Record deleted successfully";
}else{
    echo"Error deleting record " . $con->error;
}

$con->close();

?>
