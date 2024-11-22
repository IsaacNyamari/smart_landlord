<?php
include("../header.php");
include("../side_bar.php");
$owner = trim($_SESSION['id']);
$getApartments = new Apartments;
$apartments = $getApartments->getAparts($owner);
$getCaretakers = new Caretakers;
$caretakers = $getCaretakers->getCaretakers($owner);
?>

<!-- Main -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="active" href="../admin/">Dashboard</a></li>
                <li class="breadcrumb-item active"><a class="active" href="<?php echo $_SERVER['REQUEST_URI'] ?>">Apartments</a></li>
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
                            <a href="../../download.php?table=apartments" class="btn btn-success">Download PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>                               
                            <a href="../../downloadCsv.php?table=apartments" class="btn btn-warning">Download CSV</a>  
                                                 
                             <!-- <button class="btn btn-warning">Download CSV</button> -->
                            </div>
                            <div style="margin-left: auto;">
                                <button class="btn btn-info" data-toggle="modal" data-target="#addApartment">Add <i class="bi bi-plus"></i></button>
                            </div>
                        </div>
                        <hr>
                        <!-- Table with stripped rows -->
                        <table id="myTable" class="table table-secondary table-hover display">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Caretaker</th>
                                    <th>Rooms</th>
                                    <th>Vacant</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($apartments as $apartment) { ?>
                                    <tr>
                                        <td><?php echo $apartment['apart_name'] ?></td>
                                        <td><?php echo $apartment['location'] ?></td>
                                        <td><?php echo $apartment['caretaker'] !== null ? $apartment['caretaker'] : "N/A" ?></td>
                                        <td><?php echo $apartment['rooms'] ?></td>
                                        <td><?php echo $apartment['vacant'] ?></td>
                                        <td>
                                            <a href="actions/?action=edit&&target=apartment&&apart_id=<?php echo $apartment['id']?>" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                                            <a href="actions/?action=delete&&target=apartment&&apart_id=<?php echo $apartment['id']?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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
<!-- The Modal -->
<div class="modal fade" id="addApartment"  data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" data-bs-backdrop="static">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <form action="apartments/addApartment.php" method="post">
                    <div class="form-group">
                        <label for="names">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="caretaker">Caretaker</label>
                        <select name="caretaker" id="caretaker" class="form-control" required>
                            <?php foreach ($caretakers as $caretaker) { ?>
                                <option value="<?php echo $caretaker['caretaker_id'] ?>"><?php echo $caretaker['names'] ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Rooms</label>
                        <input type="text" name="rooms" id="rooms" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="vacant">Vacant</label>
                        <input type="text" name="vacant" id="vacant" class="form-control" required>
                    </div>

                    <button type="submit" name="addApartment" class="btn btn-success mt-2">Add <i class="bi bi-plus"></i></button>

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