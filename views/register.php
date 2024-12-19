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
    <div class="row container">
        <h1>Register Page</h1>
        <div class="col-sm-6">
            <form method="post" action="/contact">
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea name="body" placeholder="Your Message" class="form-control" name="" id="" cols="30" rows="4"></textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>