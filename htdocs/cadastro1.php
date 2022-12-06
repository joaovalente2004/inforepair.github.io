<?php


include("conectar1.php");

$email=$_POST['email'];
$senha=$_POST['senha'];
$telemovel=$_POST['telemovel'];

$query1 = $conexao-> prepare("SELECT email, telemovel FROM registador WHERE email = ? OR telemovel = ?");
$query1-> bind_param("ss", $email, $telemovel);
$query1-> execute();
$query1-> store_result();

if($query1-> num_rows <= 0)
{
    $query2 = $conexao-> prepare("INSERT INTO registador (senha, telemovel, email) VALUES (?, ?, ?)");
    $query2-> bind_param("sss", $senha, $telemovel, $email);
    $query2-> execute();
    $query2-> store_result();
    header("Location: http://localhost/index.php");
}
else
{
    echo 'Já existe uma conta com este nome';
    header("Location: http://localhost/conta_admin.php");
}



?>