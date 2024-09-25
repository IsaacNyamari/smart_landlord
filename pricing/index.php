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
<link rel="stylesheet" href="../landlord.css">
<?php
include("../header/header.php");
?>
<title>Smart - Landlord Pricing</title>

<body>
    <?php include("../nav/nav.php") ?>
    <div id="pricing" class="section">
        <div class="text-wrap _6vw-margin">
            <h2 class="h3-title center _2vw-margin">Pricing</h2>
            <p class="large-paragraph center">Note: All plans have all the features. The only difference is the number of units.</p>
        </div>
        <div class="w-layout-grid grid-3">
            <div id="w-node-_89eec758-988e-5900-b386-5d4c6eca9a42-6eca9a3b" class="pricing-card-2">
                <h3 class="pricing-h3">BASIC</h3>
                <div class="pricing-details-wrap">
                    <div class="pricing">0</div>
                    <div class="date">kshs / month</div>
                </div>
                <div class="pricing-check-wrap">
                    <div class="check-wrapper"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab9e4c76c95_Green_Check.svg" alt="list item start." class="medium-icon">
                        <p class="medium-paragraph">0-10 units</p>
                    </div>
                </div><a href="https://app.bomahut.com/register" id="try_free_basic" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
                    <div class="button-arrow-wrap">
                        <div class="button-arrow-circle"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315a1feac76c00_arrow_forward_black_24dp.svg" loading="lazy" alt="next" class="button-arrow"></div>
                    </div>
                    <div class="button-text">Try Free</div>
                </a>
            </div>
            <div id="w-node-_89eec758-988e-5900-b386-5d4c6eca9a55-6eca9a3b" class="pricing-card-2">
                <h3 class="pricing-h3">MINI</h3>
                <div class="pricing-details-wrap">
                    <div class="pricing">1500</div>
                    <div class="date">kshs / month</div>
                </div>
                <div class="pricing-check-wrap">
                    <div class="check-wrapper"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab9e4c76c95_Green_Check.svg" alt="list item start." class="medium-icon">
                        <p class="medium-paragraph">11-20 units</p>
                    </div>
                </div><a href="https://app.bomahut.com/register" id="start_now_standard" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
                    <div class="button-arrow-wrap">
                        <div class="button-arrow-circle"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315a1feac76c00_arrow_forward_black_24dp.svg" loading="lazy" alt="next" class="button-arrow"></div>
                    </div>
                    <div class="button-text">Start Now</div>
                </a>
            </div>
            <div id="w-node-a6027c9e-1441-4159-a27c-848405a5924a-6eca9a3b" class="pricing-card-2">
                <h3 class="pricing-h3">standard</h3>
                <div class="pricing-details-wrap">
                    <div class="pricing">3000</div>
                    <div class="date">kshs / month</div>
                </div>
                <div class="pricing-check-wrap">
                    <div class="check-wrapper"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab9e4c76c95_Green_Check.svg" alt="list item start." class="medium-icon">
                        <p class="medium-paragraph">21-50 units</p>
                    </div>
                </div><a href="https://app.bomahut.com/register" id="start_now_standard" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
                    <div class="button-arrow-wrap">
                        <div class="button-arrow-circle"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315a1feac76c00_arrow_forward_black_24dp.svg" loading="lazy" alt="next" class="button-arrow"></div>
                    </div>
                    <div class="button-text">Start Now</div>
                </a>
            </div>
            <div id="w-node-_89eec758-988e-5900-b386-5d4c6eca9a68-6eca9a3b" class="pricing-card-2">
                <h3 class="pricing-h3">premium</h3>
                <div class="pricing-details-wrap">
                    <div class="pricing">4500</div>
                    <div class="date">kshs / month</div>
                </div>
                <div class="pricing-check-wrap">
                    <div class="check-wrapper"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab9e4c76c95_Green_Check.svg" alt="list item start." class="medium-icon">
                        <p class="medium-paragraph">51-100 units</p>
                    </div>
                </div><a href="https://app.bomahut.com/register" id="start_now_premium" target="_blank" class="button black ga-event w-inline-block">
                    <div class="button-arrow-wrap">
                        <div class="button-arrow-circle"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315a1feac76c00_arrow_forward_black_24dp.svg" loading="lazy" alt="next" class="button-arrow"></div>
                    </div>
                    <div class="button-text">Start Now</div>
                </a>
            </div>
        </div>
        <div class="text-block-2">For 100+ Units, Please contact us for pricing.</div>
    </div>
    <div id="features-list" class="section">
        <div class="pricing-features-grid">
            <div class="pricing-features-row sticky">
                <div>
                    <h3 class="h3-title">Features</h3>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap">
                        <div class="medium-paragraph bold">Basic</div>
                    </div>
                    <div class="pricing-wrap">
                        <div class="medium-paragraph bold">Standard</div>
                    </div>
                    <div class="pricing-wrap">
                        <div class="medium-paragraph bold">Premium</div>
                    </div>
                    <div class="pricing-wrap">
                        <div class="medium-paragraph bold">Enterprise</div>
                    </div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Automate repetitive tasks.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Mobile real-time payment processing.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Bulk SMS/Email.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Updated tenant records.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Reports and statements.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
            <div class="pricing-features-row">
                <div>
                    <p class="medium-paragraph hide-on-phone">Accounting.</p>
                </div>
                <div class="pricing-features-wrap">
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                    <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                </div>
            </div>
        </div>
        <div class="pricing-features-row">
            <div>
                <p class="medium-paragraph hide-on-phone">Keep track of expiring leases.</p>
            </div>
            <div class="pricing-features-wrap">
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
            </div>
        </div>
        <div class="pricing-features-row">
            <div>
                <p class="medium-paragraph hide-on-phone">Unlimited users.</p>
            </div>
            <div class="pricing-features-wrap">
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
                <div class="pricing-wrap"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315ab277c76ccd_Check_Grey.svg" alt="" class="medium-icon"></div>
            </div>
        </div>
    </div>
    <?php
    include("../footer/footer.php");
    ?>
</body>

</html>