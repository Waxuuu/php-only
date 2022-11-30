<?php require_once "cfg/config.php"; ?>
<h2>Liste des utilisateurs</h2>
  <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach($data as $user){ ?>
      <div class="bloc_user">
        <h2><?php echo $user['username'] ?></h2>
        <form method="post" action="action/delete.php">
          <input type='hidden' name='id' value=" <?php echo $user['id']?>" />
          <input type='submit' value='Supprimer'/>
        </form>
      </div>
      <?php } ?>