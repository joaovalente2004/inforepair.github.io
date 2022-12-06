<!DOCTYPE html>
<html lang="pt">

<head>

    <title>CODE WITH HOSSEIN</title>

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- BoxIcons v2.1.2 -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<style>

    body {

        background-image: url('wallpaperr.png');

    }

</style>
<body>


    <nav>
        <div class="nav-brand">
            <img src="img/logo.png" alt="...">
            <div class="info">
                <h2>Ola </p></h2>
            </div>
        </div>
        <ul class="nav-list-top">
            <li class="nav-item">
                <i class="bx bxs-dashboard"></i>
                <a href="ola.php"><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <i class="bx bx-bar-chart-alt-2"></i>
                <span>Analytics</span>
            </li>
            <li class="nav-item">
                <i class="bx bx-calendar"></i>
                <span>Calendar</span>
            </li>
        </ul>
        <ul class="nav-list-bottom">
            <li class="nav-item">
                <i class="bx bx-cog"></i>
                <span>Defenicoes</span>
            </li>
            <li class="nav-item">
                <i class="bi bi-box-arrow-right"></i>
                <a href="logout.php"><span>Sair</span></a>
            </li>
        </ul>
    </nav>

    
    <form method="post" action="analises.php">
    <h2>Pesquisar Clientes:</h2>  <input type="text" name="pesquisar" placeholder="Nome do Cliente">
    <h2>Pesquisar telemovel:</h2>  <input type="text" name="pesquisarr" placeholder="Numero de telemovel do Cliente">
    <input type="submit" value="ENVIAR" class="ol">


    </form>


    <table border="3px solid">
        <tr class="ol">
         <td>NOME</td>
            <td>SOBRENOME</td>
            <td>TELEMOVEL</td>
            <td>EMAIL</td>
        </tr>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

$pesquisar = $_POST['pesquisar'];
$pesquisarr = $_POST['pesquisarr'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$result_cursos = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisar%' AND telemovel LIKE '%$pesquisarr%'";

$resultado_cursos = mysqli_query($conn, $result_cursos);

while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
    echo "<tr>";
    echo "<td>".$rows_cursos['nome']."</td>";
    echo "<td>".$rows_cursos['sobrenome']."</td>";
    echo "<td>".$rows_cursos['telemovel']."</td>";
    echo "<td>".$rows_cursos['email']."</td>";
    echo "</tr>";
}

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn);
?>

</table>




</body>

</html>