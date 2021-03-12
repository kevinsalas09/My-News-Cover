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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

</body>

</html>