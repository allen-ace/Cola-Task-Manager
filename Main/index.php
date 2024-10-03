<?php
session_start();

//Login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Username and password
    $correct_username = "admin";
    $correct_password = "12345";

    //Get form input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    //Password check
    if ($username === $correct_username && $password === $correct_password) {
        //Session is Logged in
        $_SESSION['loggedin'] = true;

        //Go to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        //Incorrect 
        $error_message = "Incorrect username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div> 
        <img class="logo" src="assets/LOGO-FULL.png" alt="Avocado Hive">
        <div class="wrapper">
            <div class="content">
                
                <form action="" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="button">Login</button>

                    <!-- Display error message if set -->
                <?php if (!empty($error_message)): ?>
                    <p style="color:red;"><?php echo $error_message; ?></p>
                <?php endif; ?>

                </form>
            </div>
        </div>
    </div>
</body>
</html>