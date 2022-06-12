<?php 

$r=require('dbconnect.php');
if($r){
    echo "db connect"."<br>";
}
$ID=$_POST["ID"];
$marka=$_POST["marka"];
$model=$_POST["model"];
$renk=$_POST["renk"];
$km=$_POST["km"];
$yil=$_POST["yil"];
$motor_hacmi=$_POST["motor_hacmi"];
$motor_gucu=$_POST["motor_gucu"];
$vites=$_POST["vites"];
$cekis=$_POST["cekis"];
$kasa_tipi=$_POST["kasa_tipi"];
$yakit=$_POST["yakit"];



$sql="INSERT INTO Arabalar(ID,marka,model,renk,km,yil,motor_hacmi,motor_gucu,vites,cekis,kasa_tipi,yakit) 
VALUES($ID,'$marka','$model','$renk','$km',$yil,'$motor_hacmi','$motor_gucu','$vites','$cekis','$kasa_tipi','$yakit')";


$retsult=mysqli_query($connect,$sql);



if($retsult){
    header("location:index.php");
    exit(0);
    // echo "saved !!! ";
}else{
    echo "error".mysqli_error($connect);
}

?>