<?php 
require('dbconnect.php');

$sql="SELECT * FROM student";
$result=mysqli_query($connect,$sql); 

$row=mysqli_fetch_row($result);

// print_r($row);

echo "STD ID ".$row[0]."<br>";
echo "STD namef".$row[1]."<br>";
echo "STD last name".$row[2]."<br>";
echo "STD gender ".$row[3]."<br>";
echo "STD class".$row[4]."<br>";

echo "<hr>";

echo "STD ID ".$row[0]."<br>";
echo "STD namef".$row[1]."<br>";
echo "STD last name".$row[2]."<br>";
echo "STD gender ".$row[3]."<br>";
echo "STD class".$row[4]."<br>";

if($result){
    echo "worked";
}else{
    echo "error".mysqli_error($connect);
}

?>