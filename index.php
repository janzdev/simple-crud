<?php
require('./read.php');
  
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CREATE</title>
  </head>
  <body>
    <div class="main">
      <form action="./create.php" method="POST" class="create-main">
          <h3>CREATE USER</h3>
          <label for="name">Username</label>
          <input type="text" placeholder="John" name="username">
          <label for="password">Password</label>
          <input type="password" placeholder="Doe" name="password">
          <input type="submit" name="create" value="Create" class="create-btn">
      </form>
       
      <table class="read-main">
        <tr>
          <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
          <th><a href="?column=username&sort=<?php echo $sort ?>">USERNAME</a></th>
          <th><a href="?column=password&sort=<?php echo $sort ?>">PASSWORD</a></th>
          <th>ACTION</th>
        </tr>
       <?php while($results=mysqli_fetch_assoc($sqlAccounts)) {?>
        <tr>
          <td><?php echo $results['id']?></td>
          <td><?php echo $results['username']?></td>
          <td><?php echo $results['password']?></td>
          <td>
            <form action="./update.php" method="post">
              <input type="submit" name="edit" value="EDIT"  class="edit">
              <input type="hidden" name="editId" value="<?php echo $results['id'] ?>"  class="edit">
              <input type="hidden" name="editUsername" value="<?php echo $results['username'] ?>"  class="edit">
              <input type="hidden" name="editPassword" value="<?php echo $results['password'] ?>"  class="edit">
            </form>
            <form action="./delete.php" method="post">
              <input type="submit" value="DELETE" name="delete" class="delete">
              <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>">
            </form>
          </td>
        </tr> 
        <?php } ?>
      </table>
    </div>
  </body>
  </html>