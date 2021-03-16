<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0 6%">
    <div class="container-fluid">
        <a class="navbar-brand" href="menu.php">My News Cover</a>
    </div>
</nav>
<div class="container" style="margin-top:3%;">
    <div class="row align-items-center">
        <form method="post" action="register.php" class="row g-3">
            <legend>REGISTER</legend>
            <div class="col-md-6">
                <input id="name" class="form-control" type="text" name="name" placeholder="First name">
            </div>
            <div class="col-md-6">
                <input id="lastname" class="form-control" type="text" name="lastname" placeholder="Last name">
            </div>
            <div class="col-12">
                <br/>
                <input id="email" class="form-control" type="text" name="email" placeholder="Email Address">
            </div>
            <div class="col-12">
                <br/>
                <input id="password" class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="col-12">
                <br/>
                <input id="address" class="form-control" type="text" name="address" placeholder="Address">
            </div>
            <div class="col-12">
                <br/>
                <input id="address2" class="form-control" type="text" name="address2" placeholder="Address 2">
            </div>
            <div class="col-6">
                <br/>
                <select id="country" name="country" class="form-select">
                    <option selected>Country</option>
                    <option>Choose2...</option>
                    <option>...</option>
                    </select>
            </div>
            <div class="col-6">
                <br/>
                <input id="city" class="form-control" type="text" name="city" placeholder="City">
            </div>
            <div class="col-6">
                <br/>
                <input id="postal" class="form-control" type="text" name="postal" placeholder="Zip/Postal Code">
            </div>
            <div class="col-6">
                <br/>
                <input id="phone" class="form-control" type="text" name="phone" placeholder="Phone Number">
            </div>
            <div class="col-6">
                <br/>
                <button type="submit" class="btn btn-primary"> Create Account </button>
            </div>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>