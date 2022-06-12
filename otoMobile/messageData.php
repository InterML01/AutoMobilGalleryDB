<?php 

$r=require('dbconnect.php');
if($r){
    echo "db connect"."<br>";
}
$id15=$_POST["id15"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];


$sql="INSERT INTO CONTACT(id15,name,email,phone,message) 
VALUES($id15,'$name','$email',$phone,'$message')";

$retsult=mysqli_query($connect,$sql);

if($retsult){
    header("location:index.html");
    exit(0);
    // echo "saved !!! ";
}else{
    echo "error".mysqli_error($connect);
}

?>