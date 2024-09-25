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
<title>Smart - Landlord FAQs</title>
<body>
    <?php include("../nav/nav.php") ?>

    <div class="container-fluid p-4">
        <h2 class="cf-colourful-text text-center">FAQs</h2>
        <hr>
        <div class="row p-3 justify-content-around" id="faqs-content">

        </div>
    </div>

    <?php include("../footer/footer.php")?>
    <script>
        let xhr = new XMLHttpRequest();
        let data, questions;
        xhr.open("GET", "../responses.json", true);
        xhr.onload = function() {

            questions = JSON.parse(this.response);
            questions = questions.mainEntity;
            console.log(questions);

            questions.forEach(question => {
                $("#faqs-content").append(`
                
                <div class="col-sm-5 shadow-sm mb-5">
                <h5 id="question" class="text-center">
                    <i class="fa fa-question-circle text-info cf-colourful-text" aria-hidden="true"></i>
                    ${question.name}
                </h5>
                <p class="answer" id="answer">
                    ${question.acceptedAnswer.text}
                </p>
            </div>`)
            });
        }
        xhr.send()
    </script>
</body>

</html>