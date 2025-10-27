<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Contact</title>
</head>
<body>
     <form method = "POST" action="contactUpdateController.php">
        <input type="hidden"  name ="contactID" value= "<?php echo (int)$contactID; ?>">

        <label>Username</label><br>
        <input type="text" name="username" required value="<?php echo $username; ?>"><br><br>

        <label>Email</label><br>
        <input type ="email" name = "email" required value = "<?php echo $email; ?>"><br><br>

        <button type = "submit" class = "btn btn-primary">Save</button>
         <a href="contactListController.php" class="btn btn secondary">Cancel</a>
  
        </form>
</body>
</html>