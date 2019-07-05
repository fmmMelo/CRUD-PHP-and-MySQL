<?php
session_start();
include_once ("conexao.php");

if((isset($_POST['nome'])) && (isset($_POST['cpf'])))
{

    $usuario = mysqli_real_escape_string($conn, $_POST['nome']);

    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);

    $cpf = md5($cpf);

        $resultado = "SELECT * FROM diretor where nome = '$usuario' && cpf = '$cpf' LIMIT 1 ";

        $query = mysqli_query($conn, $resultado);

        $result = mysqli_fetch_assoc($query);

    if(empty($result))
    {
        header("Location: programa.php");
    }
        else
        {
            $_SESSION['msg'] = 'Ocorreu um erro no login, usuario ou senha invalidos!';
            header("Location: index.php");
        }
}

?>