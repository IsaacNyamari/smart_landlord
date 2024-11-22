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
<title>Smart - Landlord Features</title>

<body>
    <?php include("../nav/nav.php") ?>

    <section class="gallery-scroll">
        <h2 class="cf-colourful-text centered-heading _2vw-margin">Features</h2>
        <div class="container-2">
            <div class="gallery-wrapper">
                <div id="w-node-_7482977e-1f3b-0585-db78-9ed93d5231f0-3d5231eb" class="gallery-sticky"><a href="#rent-utility-fee-collection" class="gallery-link">Rent Utility/Fee Collection<br></a><a href="#invoice-receipt-management" class="gallery-link">Invoice/Receipt Management<br></a><a href="#updated-tenant-records" class="gallery-link">Updated Tenant Records<br></a><a href="#sms-services" data-w-id="7482977e-1f3b-0585-db78-9ed93d5231fa" class="gallery-link">SMS services<br></a><a href="#automate-tasks" class="gallery-link">Automate Management Tasks<br></a><a href="#reports-and-statements" class="gallery-link w--current">Reports and Statements<br></a></div>
                <div id="w-node-_7482977e-1f3b-0585-db78-9ed93d523203-3d5231eb" class="gallery-grid">
                    <div id="rent-utility-fee-collection" class="w-node-_7482977e-1f3b-0585-db78-9ed93d523204-3d5231eb w-container">
                        <div id="img-rent-utility-fee-collection" class="gallery-image-wrapper w-node-_7482977e-1f3b-0585-db78-9ed93d523205-3d5231eb"><img src="../images/61f0f781c32e1d5c24481adc_online-paying.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d523206-3d5231eb" alt="property-management-system-Mobile payment processing. Integrations with (Mpesa, Equity, KCB)" class="gallery-image shadow-two">
                            <h4 class="gallery-image-text-features">Rent Utility/Fee Collection</h4>
                        </div>
                        <p class="paragraph">We integrate with popular payment methods such as Mpesa and Banks (Equity, KCB, Cooperative). Then, payments are automatically recorded on our system and we alert you on the specific tenant who has paid. Eliminates headaches of tenants lying about payments or losing receipts.<br></p>
                    </div>
                    <div id="invoice-receipt-management" class="w-node-_7482977e-1f3b-0585-db78-9ed93d52320c-3d5231eb w-container">
                        <div id="virtual-booths" class="gallery-image-wrapper w-node-_7482977e-1f3b-0585-db78-9ed93d52320d-3d5231eb"><img src="../images/61f10bc2972551816917d55d_accounting-2.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d52320e-3d5231eb" alt="property-management-system-accounting image" class="gallery-image shadow-two">
                            <h4 class="gallery-image-text-features">Invoice/Receipt Management</h4>
                        </div>
                        <p class="paragraph">Go paperless with SMS&nbsp;invoices and receipts. You can easily generate invoices and receipts on our platform and send them to tenants through SMS.<br></p>
                    </div>
                    <div id="updated-tenant-records" class="w-node-_7482977e-1f3b-0585-db78-9ed93d523214-3d5231eb w-container">
                        <div id="virtual-booths" class="gallery-image-wrapper w-node-_7482977e-1f3b-0585-db78-9ed93d523215-3d5231eb"><img src="../images/61f105c54befa77fb3b76b07_tenant-records.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d523216-3d5231eb" alt="property-management-system-tenant records image" class="gallery-image shadow-two">
                            <h4 class="gallery-image-text-features">Updated Tenant Records</h4>
                        </div>
                        <p class="paragraph">Digitized and accurate tenant records and account balances that are easy to sort through and maintain. Helps quickly resolve tenant disputes around account balances by keeping track of all tenant invoices and payments.<br></p>
                    </div>
                    <div id="sms-services" class="w-node-_7482977e-1f3b-0585-db78-9ed93d52321c-3d5231eb w-container">
                        <div id="w-node-_7482977e-1f3b-0585-db78-9ed93d52321d-3d5231eb" class="gallery-image-wrapper"><img src="../images/61f1027326c86c005698fb8c_sms-email-invoice.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d52321e-3d5231eb" alt="property-management-system-sms invoice and receipt." class="gallery-image shadow-two">
                            <h4 class="gallery-image-text-features">SMS Services</h4>
                        </div>
                        <p class="paragraph">Easily communicate with tenants using SMS on tenant balances, announcements and so much more from the comfort of your home/office. Helping you save time from traveling to the property or meeting tenants.<br></p>
                    </div>
                    <div id="automate-tasks" class="w-node-_7482977e-1f3b-0585-db78-9ed93d523224-3d5231eb w-container">
                        <div id="virtual-booths" class="gallery-image-wrapper w-node-_7482977e-1f3b-0585-db78-9ed93d523225-3d5231eb"><img src="../images/61f10d1fc76478724213f3ef_automate.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d523226-3d5231eb" alt="property-management-system-Juggling multiple tasks. automate repetitive tasks. " class="gallery-image shadow-two">
                            <h4 class="gallery-image-text-features">Automate Management Tasks</h4>
                        </div>
                        <p class="paragraph">Save time by automating repetitive management tasks such as reminding tenants to pay, recording payments and sending receipts. Allowing you to easily scale and manage more properties.<br></p>
                    </div>
                    <div id="reports-and-statements" class="w-node-_7482977e-1f3b-0585-db78-9ed93d52322c-3d5231eb w-container">
                        <div id="w-node-_7482977e-1f3b-0585-db78-9ed93d52322d-3d5231eb" class="gallery-image-wrapper"><img src="../images/61f10727f99c564438cf4223_reports-statements.svg" loading="lazy" id="w-node-_7482977e-1f3b-0585-db78-9ed93d52322e-3d5231eb" alt="property-management-system-report and statements
" class="gallery-image shadow-two">
                            <h3 class="gallery-image-text-features">Reports and Statements</h3>
                        </div>
                        <p class="paragraph">Quickly generate tenant, property and landlord statements with the click of a button.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
        <?php include("../footer/footer.php") ?>
</body>

</html>