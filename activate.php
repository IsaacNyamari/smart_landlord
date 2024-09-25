<?php
session_start();
require_once("config.php");
if (isset($_POST['activate'])) {
    $code =  $_POST['code'];
    $get_activation = "SELECT * FROM `activation` WHERE email = ?";
    $stmt = mysqli_prepare($conn, $get_activation);
    mysqli_stmt_bind_param($stmt, 's', $_SESSION['email']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $user_code = $user['code'];
        $status = 1;
        if ($code === $user_code) {
            $activate = "UPDATE `owners` SET `status` = ? WHERE email = ?";
            $stmt = mysqli_prepare($conn, $activate);
            mysqli_stmt_bind_param($stmt, 'ss', $status, $_SESSION['email']);
            if (mysqli_stmt_execute($stmt)) {
                header("location:./?status=success");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require("header.php") ?>
<title>Hi <?php echo $_SESSION['fname'] ?> || Activate your account</title>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-secondary border p-3 rounded">
                <h5 class="text-center">Enter Code sent to <?php
                                                            echo $_SESSION['email'] ?></h5>
                <form action="activate.php" method="post">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="******">
                    </div>
                    <button type="submit" name="activate" id="activate" class="btn btn-primary btn-lg text-uppercase"><i class="fa-solid fa-check"></i> activate</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>