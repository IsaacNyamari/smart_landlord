<?php
include("../header.php");
include("../side_bar.php");
$landlord_id = $_SESSION['id'];
$tenant_id = $_GET['tenant_id'];
$getTenants = new Tenants;
$tenant = $getTenants->getTenant($tenant_id, $landlord_id);
$getApartments = new Apartments;
$apartments = $getApartments->getAparts($landlord_id);
var_dump($apartments);
// require(url_for('admin/side_bar.php'));
?>

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
                        <form action="../actions/" method="post">
                            <div class="form-group">
                                <label for="names">Names</label>
                                <input type="text" name="names" id="name" class="form-control" required value="<?php echo $tenant['names']?>">
                            </div>
                            <div class="form-group">
                                <label for="id_number">Id Number</label>
                                <input type="text" name="id_number" id="id_number" class="form-control" required value="<?php echo $tenant['id_number']?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" required value="<?php echo $tenant['phone']?>">
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
    </section>

    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTenant">
        Open modal
    </button> -->



</main>
<!--End of Main -->
<?php include('../footer.php')?>