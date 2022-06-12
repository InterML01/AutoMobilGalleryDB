<?php 

require('dbconnect.php');
$sql = "SELECT * FROM `Arabalar`";
$result=mysqli_query($connect,$sql);

$count=mysqli_num_rows($result);
$order=1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mobile Gallery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Car Gallery Information</h1>
        <hr>
        <?php if($count>0){?>
        <table class="table table-bordered table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marka</th>
                    <th scope="col">Model</th>
                    <th scope="col">Renk</th>
                    <th scope="col">Km</th>
                    <th scope="col">Yil</th>
                    <th scope="col">Motor_hacmi</th>
                    <th scope="col">Motor_gucu</th>
                    <th scope="col">Vites</th>
                    <th scope="col">Cekis</th>
                    <th scope="col">Kasa_tipi</th>
                    <th scope="col">Yakit</th>
                    <th scope="col">Delete

                    </th>
                    <!-- <th scope="col">Delete</th> -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row=mysqli_fetch_assoc($result)){?>
                <tr>

                    <!-- <th><?php echo $order++?></th> -->
                    <td><?php echo $row["ID"]; ?></td>
                    <td><?php  echo $row["marka"];?></td>
                    <td><?php echo $row["model"];?></td>
                    <td><?php echo $row["renk"];?></td>
                    <td><?php echo $row["km"]; ?></td>
                    <td><?php echo $row["yil"];?></td>
                    <td><?php echo $row["motor_hacmi"]; ?></td>
                    <td><?php echo $row["motor_gucu"];?></td>
                    <td><?php echo $row["vites"]; ?></td>
                    <td><?php echo $row["cekis"];?></td>
                    <td><?php echo $row["kasa_tipi"]; ?></td>
                    <td><?php echo $row["yakit"];?></td>
                    <td>
                        <a href="deleleteQueryStr.php?idaraba=<?php echo $row["ID"];?>" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a>
                    </td>
                    <!-- <td>
                        <a href="image.php" class="btn btn-info"
                            >Picture</a>
                    </td> -->
                    

                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else{ ?>
        <div class="alert alert-danger">
            <b>No data!!!<b>
        </div>
        <?php } ?>
        <a href="insertForm.php" class="btn btn-success">Add</a>
        <?php if($count>0){?>
        <?php } ?>
        </form>
        <a href="index.html" class="btn btn-primary">Home</a>

    </div>
</body>

</html>