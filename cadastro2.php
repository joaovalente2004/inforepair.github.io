<?php

include("conectar2.php");

$email=$_POST['email'];
$senha=$_POST['senha'];
$telemovel=$_POST['telemovel'];
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];

$query1 = $conexao-> prepare("SELECT email, telemovel FROM cliente WHERE email = ? OR telemovel = ?");
$query1-> bind_param("ss", $email, $telemovel);
$query1-> execute();
$query1-> store_result();

if($query1-> num_rows <= 0)
{
    $query2 = $conexao-> prepare("INSERT INTO cliente (senha, telemovel, email, nome, sobrenome) VALUES (?, ?, ?, ?, ?)");
    $query2-> bind_param("sssss", $senha, $telemovel, $email, $nome, $sobrenome);
    $query2-> execute();
    $query2-> store_result();
    header("Location: http://localhost/index.php");
}
else
{
    
    echo 'Já existe uma conta com este nome';
    header("Location: http://localhost/conta_cliente.php");
}

?>






