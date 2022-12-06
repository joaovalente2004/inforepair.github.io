<?php

include("conectar5.php");

$email=$_POST['email'];
$senha=$_POST['senha'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cod =$_POST['cod_tecnico'];

$codigo = '1234567890';

$query1 = $conexao-> prepare("SELECT email FROM backoffice WHERE email = ?");
$query1-> bind_param("s", $email);
$query1-> execute();
$query1-> store_result();



if($query1-> num_rows <= 0 && $cod == $codigo)
{
    $query2 = $conexao-> prepare("INSERT INTO backoffice (senha, email, nome, sobrenome) VALUES (?, ?, ?, ?)");
    $query2-> bind_param("ssss", $senha, $email, $nome, $sobrenome);
    $query2-> execute();
    $query2-> store_result();
    header("Location: http://localhost/index.php");
}
else
{
    
    echo "<script>alert('Email enviado com Sucesso!);</script>";
    header("Location: http://localhost/registar_backoffice.html");
}

?>
