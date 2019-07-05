<?php
    session_start();
    include_once ("conexao.php");
    
        $nome = filter_input(INPUT_POST, 'cad_nome', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cad_cpf', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'cad_email', FILTER_SANITIZE_EMAIL);

        $cpf = md5($cpf); 
    

        if($cpf == "" || $nome == ""|| $email == "")
        {
            $_SESSION['msg'] = "<p style='color:red;'> Usuario não foi cadastrado com exito </p>";
            header("Location: cad_index.php");
        }
        else
        {
    
        $insert_user = "INSERT INTO formulario (nome, cpf, email) values ('$nome', '$cpf', '$email')";
    
        $db_query = mysqli_query($conn, $insert_user);
    
            if(mysqli_insert_id($conn))
            {
                $_SESSION['msg'] = "<p style='color:#fff;'> Usuario foi cadastrado com exito </p>";
                header("Location: index.php");
            }
            else
            {
                $_SESSION['msg'] = "<p style='color:red;'> Usuario não foi cadastrado com exito </p>";
                header("Location: index.php");
            }
    
        }
?>