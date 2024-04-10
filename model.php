<?php

    session_start();
    //limpa o buffer de saida, evita erros de sessao
    ob_start();

    include_once("db.php");

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
   
    if(!empty($dados['send'])){
        
        $query = "SELECT * 
                    FROM usuarios 
                    WHERE email =:email
                    LIMIT 1";

        $res = $conn->prepare($query);
        $res->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $res->execute();  
        
        if(($res) AND ($res->rowCount() != 0)){
        
            $row = $res->fetch(PDO::FETCH_ASSOC);

            if(password_verify($dados['password'], $row['senha'])){
                
                $_SESSION['nome'] = $row['nome']; 
                $_SESSION['id'] = $row['id']; 
                header('Location: dashboard.php');
              
            }else{
                $_SESSION['msg'] = "<p class='erro'>Erro: Senha invalida!</p>";
            }

        }else{
            $_SESSION['msg'] = "<p class='erro'>Erro: Usuario invalido!</p>";
        }

    }

    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    };

   