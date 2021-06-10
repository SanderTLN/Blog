<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleA.css">
    <title>Autorization</title>
</head>
<body>
    <form action="admin.php" method="post">
        <div class="container">
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            <button type="submit" name="login-btn" class="btn btn-big">Login</button>
        </div>
    </form>
</body>
</html>