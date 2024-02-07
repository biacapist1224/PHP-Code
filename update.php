<?php
$servername="localhost";
$database="mini_mundo";
$username="root";
$password="123456";

//creation connction
$con= new mysqli($servername,$database,$username,$password);
//check connection
if($con->connection_error){
    die("connection failed:".$con->connect_error);
}
$sql = "UPDATE CLIENTE SET name = Wendel WHERE id=24";

if($con->query($sql) === TRUE){
    echo "Record update successfully";
}else{
    echo"Error updating Record:". $con->error;
}

$mysql_close($con);
?>