<?php

require('dbconnect.php');
$sql="SELECT * FROM `CEKIS`";
$result=mysqli_query($connect,$sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info of student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Çekiş</h1>
        <hr>

        <table class="table table-bordered table-dark table-striped ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">çekiş</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row=mysqli_fetch_assoc($result)){?>
                <tr>
                    <!-- <th><?php echo $order++?></th> -->
                    <td><?php  echo $row["id7"];?></td>
                    <td><?php  echo $row["çekiş"];?></td>
                    <td>
                </tr>

                <?php } ?>
            </tbody>
    </div>
</body>

</html>