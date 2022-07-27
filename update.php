<?php
require('./database.php');
  
if(isset($_POST['edit'])){
  $editId =$_POST['editId'];
  $editUsername=$_POST['editUsername'];
  $editPassword=$_POST['editPassword']; 
}
if(isset($_POST['update'])){
  $updateId=$_POST['updateId'];
  $updateUsername=$_POST['updateUsername'];
  $updatePassword=$_POST['updatePassword'];

  $queryUpdate="UPDATE accounts SET username ='$updateUsername', password ='$updatePassword' WHERE id=$updateId";
  $sqlUpdate = mysqli_query($connection, $queryUpdate);

  echo '<script>alert("Successfully Updated!")</script>';
  echo '<script>window.location.href="./index.php"</script>';
}
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE USER</title>
  </head>
  <body>
    <div class="main">
      <form action="./update.php" method="POST" class="create-main">
          <h3>CREATE USER</h3>
          <label for="name">Username</label>
          <input type="text" placeholder="John" name="updateUsername" value="<?php echo $editUsername?>" required >
          <label for="password">Password</label>
          <input type="password" placeholder="Doe" name="updatePassword" value="<?php echo $editPassword?>" required >
          <input type="submit" name="update" value="UPDATE" class="create-btn">
          <input type="hidden" name="updateId" value="<?php echo $editId ?>">   
      </form>
       
        
    </div>
  </body>
  </html>