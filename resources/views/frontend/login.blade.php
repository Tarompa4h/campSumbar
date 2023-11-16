<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/Login.css">
</head>
<body>


    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <hr color ="darkorange">
            <div class="input-box">
                <input type="text" placeholder="Username" require>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="Password" placeholder="Password" require>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="/Register">Register</a></p>
            </div>

        </form>
    </div>
</body>
</html>