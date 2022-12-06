<!DOCTYPE html>
<html lang="pt"> 
    
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/edicao.css">

    
<title>Registar</title>
</head>
<body>


<form action="cadastro1.php" method="POST">
        <div class="container">
          <h1>Registar Registador</h1>
          <br>
          <p>Prencha todos os campos abaixo</p>
          <br>
          <hr>
      
          <label for=""><b>Email</b></label>
          <input type="text" placeholder="Intruduza o seu email" name="email" id="email">

          <label for=""><b>Nr de Telemovel</b></label>
          <input type="text" placeholder="Intruduza o seu numero de Telemovel" name="telemovel" id="telemovel">
      
          <label for=""><b>Password</b></label>
          <input type="password" placeholder="Intruduza a sua password" name="senha" id="psw">
      
          
          <hr>
      
          <button class="registerbtn">Registar</button>
          
        </div>
      
        <div class="container signin" id="sumo">
<p>          Ja tem uma conta criada? <a href="conta_admin.php">Entrar</a>.</p>
        </div>
      </form>




    

</body>
</html>