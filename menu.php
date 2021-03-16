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

$news = getNews($user['id']);
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0 6%">
    <div class="container-fluid">
        <a class="navbar-brand" href="menu.php">My News Cover</a>
        <div class="d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $user['first_name']
                    ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    <?php
                    if ($user['role_id'] == 1) {
                        echo "<li><a class='dropdown-item' href='show_categories.php'>Categories</a></li>";
                    } else {
                        echo "<li><a class='dropdown-item' href='show_sources.php'>News Sources</a></li>";
                    }
                    ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">

    <?php
    if (count($news)==0){
        ?>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
                <br>
                <br>
                <h2 style="text-align: center;">Looks like you dont have any feeds</h2>
                <br>
                <a  style="text-align: center;" class="btn btn-primary" href="new_feed.php" role="button">Add</a>
            </div>
            <div class="col-md-4">
            </div>
        <?php
        }
    else{
        foreach($news as $new){ 
            echo "<div class='col-sm-4' style='margin-top: 25px'>
                <div class='card' style='width: 18rem;'> 
                <p class='card-text'>" . substr($new[4], 0, -5) . "</p>
                <img src=" . $new[5] . " class='card-img-top'>
                <div class='card-body'> 
                <h5 class='card-title'>" . $new[1] . "</h5>
                <p class='card-text'>" . $new[2] . "</p>
                <a href=" . $new[3] . " class='card-link'>Go to site</a>
                </div>
                </div>
                </div>";
        }
            
        
        }
    
    ?>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>