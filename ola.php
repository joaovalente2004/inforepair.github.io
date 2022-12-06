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
            <?php

             session_start();
             
                echo '<h2>Olá, '.$_SESSION['nome'].'</h2>';
             ?>
            </div>
        </div>
        <ul class="nav-list-top">
            <li class="nav-item">
                <i class="bx bxs-dashboard"></i>
                <a href="ola.php"><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <i class="bx bx-bar-chart-alt-2"></i>
                <a href="analises.php"><span>Analytics</span></a>
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

    <form class="ola">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit" class="sumbit">
</form>

</body>

</html>