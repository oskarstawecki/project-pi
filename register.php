<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best car rent in Poland</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images/web/favicon.png">
</head>

<body>

    <div class="top-left">
        <img src="logo.png" alt="CarRentLogo">
    </div>

    <div class="top-right">
        <p>Best car rent in Poland </p>
    </div>
    <main>
        <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="email">Phone:</label>
            <input type="email" name="phone" id="phone">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        </form>
        <?php
        $conn=mysqli_connect("localhost","root","","car_rent");

        ?>
    </main>
    <footer>
        Already a member? <a href="login.php">Login here</a>
    </footer>

</body>

</html>