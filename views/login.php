<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <div class="row container">
        <h1>Login Page</h1>
        <div class="col-sm-6">
            <form method="post" action="/login">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>