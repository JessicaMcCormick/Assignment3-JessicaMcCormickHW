<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
</head>
<body>
    <h1>Are you sure you want to delete this contact?</h1>
    
    <form method = "POST" action="contactDeleteController.php">
        <input type = "hidden" name = "contactID"
        value="<?php echo $contactID; ?> ">
           
        <button type = "submit">Confirm</button>

        <a href="contactListController.php" class = "btn btn-secondary">Cancel</a>
    
    </form>
</body>
</html>