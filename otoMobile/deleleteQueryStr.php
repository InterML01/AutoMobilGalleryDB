<?php 
require('dbconnect.php');

$ID=$_GET["idaraba"];

// echo $id;

$sql="DELETE from `Arabalar` where ID=$ID";

$result=mysqli_query($connect,$sql);

if($result){
    header(("location:index.php"));
    exit(0);

}else{
    // echo "error".mysqli_error($connect);
    echo "error";
}

?>
