<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <div class="login">
    <h2>Login</h2>
    <form action="" method="GET">
        <div class="email">
            <p>Email Address</p>
                <input type="text" placeholder="Email" name="first name" value="" required="">
        </div>
        <div class="password">
            <p>Password</p>
                <p><input type="text" placeholder="Password" name="Last name" value="" required=""></p>
            <input type="Submit" name="Submit" value="Submit">
        </div>
    </form>
    </div>
</body>
</html>
<div class="phpform">
    <?php   
        print_r($_GET);
    ?>
</div>