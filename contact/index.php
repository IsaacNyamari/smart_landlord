<?php
session_start();
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    if ($status == "success") {
        $data = $_SESSION['fname'] . " your account is registered!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require_once("../header/header.php");
?>

<link rel="stylesheet" href="../landlord.css">
<title>Smart - Landlord Contact</title>

<body>
    <?php include("../nav/nav.php") ?>

    <section class="gallery-scroll">
        <h2 class="cf-colourful-text centered-heading _2vw-margin">Contact</h2>
        <div class="container-2">
            <div class="col-sm-6">

                <form id="contactForm" class="form-horizontal" style="color: #000 !important;" role="form">
                    <div class="form-group">
                        <legend class="">Send Message</legend>
                    </div>
                    <div class="form-group">
                        <label for="fullNames" class="cf-colourful-text">Names</label>
                        <input type="text" class="form-control" name="full_names" id="fullNames" placeholder="Full Names">
                    </div>
                    <div class="form-group">
                        <label for="email" class="cf-colourful-text">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="your email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label cf-colourful-text">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <script>
        let contactForm = document.getElementById("contactForm"),
            XHR;
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            let formData = new FormData(contactForm);
            XHR = new XMLHttpRequest();
            XHR.open("POST", "contact/send.php", true)
            // XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            XHR.onload = function(e) {
               if(this.response == "success"){
                console.log("sent");
               }
            }
            XHR.send(formData)
        })
    </script>
    <?php include("../footer/footer.php") ?>
</body>

</html>