<?php
include("../header.php");
include("../side_bar.php");
$landlord_id = $_SESSION['id'];
$getTenants = new Tenants;
$tenants = $getTenants->getTenants($landlord_id);
$getApartments = new Apartments;
$apartments = $getApartments->getAparts($landlord_id);
?>
<!-- Main -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="active" href="../">Dashboard</a></li>
                <li class="breadcrumb-item active"><a class="active" href="<?php echo $_SERVER['REQUEST_URI'] ?>">Tenants</a></li>
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
                            <a href="../../download.php?table=tenants" class="btn btn-success">Download PDF</a>
                            <a href="../../downloadCsv.php?table=tenants" class="btn btn-warning">Download CSV</a>
                            </div>
                            <div style="margin-left: auto;">
                                <button class="btn btn-info" data-toggle="modal" data-target="#addTenant">Add <i class="fa fa-edit"></i></button>
                            </div>
                        </div>
                        <hr>
                        <!-- Table with stripped rows -->
                        <table id="myTable" class="table table-secondary table-hover display">
                            <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>ID Numner</th>
                                    <th>Phone</th>
                                    <th>Apartment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tenants as $tenant) { ?>
                                    <tr>
                                        <td><?php echo $tenant['names'] ?></td>
                                        <td><?php echo $tenant['id_number'] ?></td>
                                        <td><?php echo $tenant['phone'] ?></td>
                                        <td><?php echo $tenant['name'] ? $tenant['name'] : "N/A" ?></td>
                                        <td>
                                            <a href="<?php echo url_for("/admin/tenants/tenant.php?tenant_id") ?>=<?php echo $tenant['tenant_id'] ?>" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                                            <a href="actions/?action=delete&&target=tenant&&tenant_id=<?php echo $tenant['tenant_id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- The Modal -->
    <div class="modal fade" id="addTenant">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="tenants/addTenants.php" method="post">
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
                        <div class="form-group">
                            <label for="apartment">Apartment</label>
                            <select name="apartment" id="apartment" class="form-control">
                                <?php foreach ($apartments as $apartment) { ?>
                                    <option value="<?php echo $apartment['id'] ?>"><?php echo $apartment['apart_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="addTenant" class="btn btn-success">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!--End of Main -->
<?php include("../footer.php") ?>