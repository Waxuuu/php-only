<?php require_once "cfg/config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Inscription</h1>
  <form method="post" action="action/signup.php">
      Username<input type='username' name='username' />
      Password<input type='password' name='password' />
      <input type='submit' value='Inscription' />
  </form>
  
  <h1>Connexion</h1>
  <form method="post" action="action/login.php">
    Username<input type='username' name='username' />
    Password<input type='password' name='password' />
    <input type='submit' value='Connexion' />
  </form>



   
      
    
  
     
   


</body>
</html>