<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="container my-5">
        <h2>Add New Car Gallery</h2>
        <form action="insertData.php" method="POST">
            <div class="form-group">
                <label for="ID">ID</label>
                <input type="number" name="ID" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="marka">marka</label>
                <input type="text" name="marka" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="model">model</label>
                <input type="text" name="model" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="renk">renk</label>
                <input type="text" name="renk" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="km">km</label>
                <input type="text" name="km" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="yil">yil</label>
                <input type="number" name="yil" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="motor_hacmi">motor_hacmi</label>
                <input type="text" name="motor_hacmi" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="motor_gucu">motor_gucu</label>
                <input type="text" name="motor_gucu" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="vites">vites</label>
                <input type="text" name="vites" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="cekis">cekis</label>
                <input type="text" name="cekis" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="kasa_tipi">kasa_tipi</label>
                <input type="text" name="kasa_tipi" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="yakit">yakit</label>
                <input type="text" name="yakit" id="" class="form-control">
            </div>

            <input type="submit" value="Save" class="btn btn-success">
        
            <a class="btn btn-warning btn-xl text-uppercase" href="index.html">Home</a>
        </form>

        <br>



    </div>
</body>

</html>