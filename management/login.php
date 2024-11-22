<?php
if(isset($_POST['submit'])){
$email = $_POST['email']."<br>";
$password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pico-main/css/pico.min.css">
    <title>Login</title>
    <style>
        body {
            margin: 0 !important;
            /* padding: 0; */
            box-sizing: border-box;
        }

        .container {
            margin: auto;
            height: 90vh !important;
            align-content: center;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .row {
            margin: auto;
            border-radius: 15px;
            width: 50%;
            box-shadow: 1px 1px 8px 2px;
            padding: 12px;
        }

        .row>h2 {
            text-align: center;
        }

        .row>form>input {
            height: 40px !important;
            font-size: 16px;
            display: block;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <h2 class="center">Login</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="loginForm" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button name="submit">Login</button>
                </form>
            </div>
        </div>
    </main>

</body>

</html>