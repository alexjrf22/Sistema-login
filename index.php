<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/css.css" rel="stylesheet">

    <title>Login</title>
</head>
<body>



<?php

    session_start();
    include_once("model.php");

?>

    <div class="row">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="email">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="Password">
                </div>
                <input type="submit" class="btn btn-primary" value="Acessar" name="send">
                
            </form>
    </div> 
</body>
</html> 