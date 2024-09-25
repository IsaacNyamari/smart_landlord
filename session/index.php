<!DOCTYPE html>
<html lang="en">
<?php include_once('../header.php') ?>
<title>Register || Smart-landlord</title>

<body class="session-body">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-container p-3">
                    <form action="register.php" method="post">
                        <h5 class="text-center">Sign Up</h5>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name="fname" id="firstName" autocomplete="off" class="form-control" placeholder="John">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lname" id="lastName" autocomplete="off" class="form-control" placeholder="Doe">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password" autocomplete="off" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="password"
                                placeholder="**********" />
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" autocomplete="off" class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="confirm_password"
                                id="confirm_password"
                                placeholder="**********" />
                        </div>

                        <button type="submit" name="register" class="btn btn-success">Sign-up</button>

                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-container p-3">
                    <form action="login.php" method="post">
                        <h5 class="text-center">Sign In</h5>

                        <div class="form-group">
                            <label for="email_login">Email</label>
                            <input type="email" autocomplete="off" class="form-control" name="login_email" id="email_login" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="login_password" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="login_password" autocomplete="off"
                                id="login_password"
                                placeholder="**********" />
                        </div>
                        <button type="submit" name="login" class="btn btn-success">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>