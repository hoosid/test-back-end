<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>signup</title>
</head>

<body>
    <form action="contact.php" style="border:1px solid #ccc" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>username</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>email</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>mobile</b></label>
            <input type="number" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
            <input type="password" checked="checked" name="remember" style="margin-bottom:15px"><b>password</b>
          </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>

</html>
