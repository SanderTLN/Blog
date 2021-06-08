<?php
require_once ('conf.php');
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleA.css">
    <title>Autorization</title>
</head>
<body>
    <form action="index.php" method="post">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
    </form>
</body>
</html>

<?php
            $msg = '';
            
            if (isset($_POST['index.php']) && !empty($_POST['uname']) 
               && !empty($_POST['psw'])) {
				
               if ($_POST['uname'] == 'BIGDADDY777' && 
                  $_POST['psw'] == 'coolfolks') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'BIGDADDY777';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>

