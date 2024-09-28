<?php
include("../header.php");
include("../side_bar.php");
$getCaretakers = new Caretakers;
$employer = $_SESSION['id'];
$caretakers = $getCaretakers->getCaretakers($employer);
?>

<!-- Main -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="active" href="../admin/">Dashboard</a></li>
                <li class="breadcrumb-item active"><a class="active" href="<?php echo $_SERVER['REQUEST_URI'] ?>">Caretakers</a></li>
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
                                <button class="btn btn-info" data-toggle="modal" data-target="#addCaretaker">Add <i class="fa fa-edit"></i></button>
                            </div>
                        </div>
                        <hr>
                        <!-- Table with stripped rows -->
                        <table id="myTable" class="table table-secondary table-hover display">
                            <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>ID Number</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($caretakers as $caretaker) { ?>
                                    <tr>
                                        <td><?php echo $caretaker['names'] ?></td>
                                        <td><?php echo $caretaker['id_number'] ?></td>
                                        <td><?php echo $caretaker['phone'] !== null ? $caretaker['phone'] : "N/A" ?></td>
                                        <td>
                                            <a href="actions/?action=edit&&target=caretaker&&caretaker_id=<?php echo $caretaker['caretaker_id']?>" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                                            <a href="actions/?action=delete&&target=caretaker&&caretaker_id=<?php echo $caretaker['caretaker_id']?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!--End of Main -->

<div class="modal fade" id="addCaretaker">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <form action="caretakers/addCaretaker.php" method="post">
                    <div class="form-group">
                        <label for="names">Names</label>
                        <input type="text" name="names" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_number">Id Number</label>
                        <input type="text" name="id_number" id="id_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <button type="submit" name="addCaretaker" class="btn btn-success">Add</button>

                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<?php include("../footer.php") ?>