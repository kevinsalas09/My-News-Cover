<?php
session_start();

$user = $_SESSION['user'];
if (!$user) {
    echo '<script>location.href = "index.php"</script>';
}
if ($user['role_id'] != 1) {
    echo '<script>location.href = "menu.php"</script>';
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

<?php
include 'functions.php';
$categories = getCatgories();
?>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">My News Cover</a>
        <a class="btn btn-primary" href="index.php">Logout</a>
    </nav>
    <div class="container" style="margin-top:3%;">
        <div class="row align-items-center">
            <form method="post" action="categorie.php" class="row g-3">
                <legend>News Categorie</legend>
                <div class="col-md-6">
                    <input id="name" class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"> Save </button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>