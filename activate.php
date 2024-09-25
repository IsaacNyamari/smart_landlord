<?php
require("admin/protect.php");
include("admin/functions.php");
$email = $_SESSION['email'];
$owner = $getOwners->getOwner(trim($email));
$status = $owner['status'];
if (isset($_POST['activate'])) {
    $code =  $_POST['code'];
    $email = $_SESSION['email'];
    $owners = $getOwners->activateOwner($email, $code);
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