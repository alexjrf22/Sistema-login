<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/css.css" rel="stylesheet">
    <title>pagina restrita</title>
</head>
<body>
    <?php
        session_start();
        ob_start();

        if (isset ($_SESSION["nome"])) {
            $nome = $_SESSION["nome"];
        }

        if(!isset($_SESSION["nome"]) OR (!isset($_SESSION["id"]))) {
            $_SESSION['msg'] = "<p class='erro'>Erro: Necessario realizar login!</p>";
            header("Location: index.php");
        }

        echo '<b>Bem vindo: </b>' . $nome;
       
    ?>

    <a href="sair.php">Sair</a>

</body>
</html>