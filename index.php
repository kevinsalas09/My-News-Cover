<?php
session_start();

$message = "";
if (!empty($_REQUEST['status'])) {
    switch ($_REQUEST['status']) {
        case 'login':
            $message = 'User does not exists';
            break;
        case 'error':
            $message = 'There was a problem inserting the user';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<div class="container" style="margin-top: 200px;">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
            <form action="login.php" method="POST" role="form">
                <h2 style="text-align: center;">Login</h2>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                     <small id="emailHelp" class="form-text text-muted"><?php echo $message; ?></small>
                </div>
                <div class="form-group text-center">
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="form-group">
                    <br>
                    <label>If you dont have an account, <a href="register_form.php">Singup Here</a></label>
                </div>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>