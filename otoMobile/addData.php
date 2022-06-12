<?php
    $connect=mysqli_connect("localhost","root","","izu");
    // or 
// require('dbconnect.php');
// $sql="SELECT * FROM `RENK`";
// $result = mysqli_query($connect, $sql);
if(!$connect)
{
    die("เกิดข้อผิดพลาดเกิดขึ้น");
}else{
    echo "connected";
}

?>

<form method="post" action="">
    <input type="number" name="ID">
    <br>
    <input type="text" name="marka"><br>
    <input type="text" name="model"><br>
    <input type="text" name="renk"><br>
    <input type="text" name="km"><br>
    <input type="number" name="yil"><br>
    <input type="text" name="motor_hacmi"><br>
    <input type="text" name="motor_gucu"><br>
    <input type="text" name="vites"><br>
    <input type="text" name="cekis"><br>
    <input type="text" name="kasa_tipi"><br>
    <input type="text" name="yakit"><br>
    <input type="submit" name="button">

</form>

<?php

if(isset($_POST["button"])) 
{
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


$sql="INSERT INTO Arabalar(ID,marka,model,renk,km,yil,motor_hacmi,motor_gucu,vites,cekis,kasa_tipi,yakit) VALUES(`$ID`,'$marka','$model','$renk','$km','$yil','$motor_hacmi','$motor_gucu','$vites','$cekis','$kasa_tipi','$yakit')";
$retsult=mysqli_query($connect,$sql);
    
    // $sql="INSERT INTO Arabalar(ID,marka,model,renk,km,yil,motor_hacmi,motor_gucu,vites,cekis,kasa_tipi,yakit)VALUES(`" .$_POST["ID"]. "`,`".$_POST["marka"]."`,`".$_POST["model"]."`,`".$_POST["renk"]."`,`".$_POST["km"]."`,`".$_POST["yil"]."`,`".$_POST["motor_hacmi"]."`,`".$_POST["motor_gucu"]."`,`".$_POST["vites"]."`,`".$_POST["cekis"]."`,`".$_POST["kasa_tipi"]."`,`".$_POST["yakit"]."`)";
    echo "clicked";
    $result=mysqli_query($connect,$sql);
    if($result)
    {
        echo "added";
    }else{
        echo "error";
    }
}
?>