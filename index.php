<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .formulario{
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: 0 auto;
    }
    .bad{
        color: red;
        background-color: black;
    }
    .ok{
        color: green;
        background-color: black;
    }
</style>
<body>
    <h1>My first PHP page</h1>
    <form action="" method="POST">
        <div class="form-group w-50">
            <input type="text" name="nombre" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group w-50">
            <input type="text" class="form-control" name="apellido" placeholder="enter your surname">
        </div>
        <div class="form-group w-50">
            <input type="text" class="form-control" name="ciudad" placeholder="enter your city">
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <?php
        include('conexion.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>