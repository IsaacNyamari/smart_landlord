<?php
include("../header.php");
include("../side_bar.php");
?>

<!-- Main -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Messages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="active" href="../admin/">Dashboard</a></li>
                <li class="breadcrumb-item active"><a class="active" href="<?php echo $_SERVER['REQUEST_URI'] ?>">All Messages</a></li>
                </li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card bg-light">
                    <div class="card-body">
                        <div class="card-title d-flex">
                            <div>
                                <button class="btn btn-success">Download PDF</button>
                                <button class="btn btn-warning">Download CSV</button>
                            </div>
                            <div style="margin-left: auto;">
                                <button class="btn btn-info">Add <i class="fa fa-edit"></i></button>
                            </div>
                        </div>
                        <hr>
                        

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!--End of Main -->


<?php include("../footer.php") ?>