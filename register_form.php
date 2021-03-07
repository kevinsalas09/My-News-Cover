<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">My News Cover</a>
        <a class="btn btn-primary" href="index.php">Logout</a>
    </nav>
    <div class="container" style="margin-top:5%;">
        <div class="row align-items-center">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
                <form method="post" action="add_user.php">
                    <legend>REGISTER</legend>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input id="lastname" class="form-control" type="text" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div id="info" class="form-text">By creating an account, you agree to the Terms of Service and acknowledge our Privacy Policy.
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary"> Create Account </button>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

</body>

</html>