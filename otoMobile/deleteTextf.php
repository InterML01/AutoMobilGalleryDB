<?php 
require("dbconnect.php");

$ID=$_POST["idaraba"];
$sql="DELETE from Arabalar where id=$ID";

echo $sql;
$result=mysqli_query($connect,$sql);

if($result){
    echo "deleted ??? <br>";
    // echo "<a href="index.php">Home</a>";
}else{
    echo "error".mysqli_error($connect);
}

?>