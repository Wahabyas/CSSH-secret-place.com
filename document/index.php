<?php
// Show error message if redirected with error=1
$error = isset($_GET['error']) ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Main-css.css">
    <title>Document</title>
</head>
<style>
    input{
    display: block;
    padding: 10px;
    margin: 10px;
    width: 250px;
    }
    .error-message {
        color: red;
        font-weight: bold;
        margin: 10px 0;
    }
</style>
<body>
    <header>
        <div class="header-index">
            <h3 class="title">Msu.BlackMarket.shhh</h3>
        </div>
    </header>
    
    <div class="container-login">
        <div class="login">
            <h2 class="login-title">Login ;></h2>
        <div class="form-wrapp">
            <?php if ($error): ?>
                <div class="error-message">Login failed. Please try again.</div>
            <?php endif; ?>
            <form action="../controllers/login-validation.php" id="login-form" method="post">
                <small>Username</small>
                <input type="text" id="username" name="username" placeholder="Username">
                <small>Password</small>
                <input type="password" id="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
