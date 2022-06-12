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
        <h2>Contact us</h2>
        <form action="messageData.php" method="POST">
            <div class="form-group">
                <label for="id15">ID</label>
                <input type="number" name="id15" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="number" name="phone" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">message</label>
                <input type="text" name="message" id="" class="form-control">
            </div>
            <input type="submit" value="Send" class="btn btn-success">
<br> <br>
<a href="index.html" class="btn btn-primary">Home</a>
        </form>

        <br>



    </div>
</body>

</html>