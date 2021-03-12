<?php
session_start();

$user = $_SESSION['user'];
if (!$user) {
    echo '<script>location.href = "index.php"</script>';
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $cat) {
                        echo "<tr>";
                        echo "<td>$cat[1]</td>";
                        echo "<td> <a href='#'>Delete</a> <a href='#'>Edit</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="col-6">
                <br/>
                <a role="button" class="btn btn-primary" href="new_categorie.php"> Add New </a>
            </div>
        </div>
    </div>
</body>
</html>