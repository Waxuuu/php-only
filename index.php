<?php require_once "cfg/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
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

  <h2>Liste des utilisateurs</h2>
  <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $user){ ?>
      <div class="bloc_user">
        <h2><?php echo $user['username'] ?></h2>
      </div>
      <?php } ?>
    <?php 
    if ($user["admin"] == 1)
    {
      echo type="submit" value="Supprimer"
    }else 
     
   


</body>
</html>