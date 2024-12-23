<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <div class="row container-fluid">
        <div class="col-sm-6 mx-auto">
            <form method="post" action="/register" class="d-flex flex-column gap-3 mt-5 ">
                <div class="row">
                    <h4>Create Account </h4>
                    <div class=" col-sm-6 form-group d-flex flex-column gap-2">
                        <label for="exampleInputEmail1">Firstname</label>
                        <input name="firstname" type="text" class="form-control" placeholder="Firstname">
                    </div>
                    <div class=" col-sm-6 form-group d-flex flex-column gap-2">
                        <label for="exampleInputEmail1">Lastname</label>
                        <input name="lastname" type="text" class="form-control" placeholder="Lastname">
                    </div>
                </div>

                <div class="form-group d-flex flex-column gap-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group d-flex flex-column gap-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" placeholder="Password" class="form-control" name="password">
                </div>
                <div class="form-group d-flex flex-column gap-2">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" class="form-control" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div>
                    <p>Already Have a Account ? <span><a href="/login">Login Here</a></span> </p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>