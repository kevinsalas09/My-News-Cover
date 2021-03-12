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
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </nav>
    <div class="container" style="margin-top:3%;">
        <div class="row align-items-center">
            <form method="post" action="register.php" class="row g-3">
                <legend>News Source</legend>
                <div class="col-md-6">
                    <input id="name" class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="col-md-12">
                    <input id="url" class="form-control" type="text" name="url" placeholder="URL">
                </div>
                <div class="col-6">
                    <select id="categorie" name="categorie" class="form-select">
                        <?php
                        foreach ($categories as $cat) {
                            echo "<option value=\"$cat[0]\">$cat[1]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"> Save </button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>