<?php
include("protect.php");
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
require_once("header.php");
?>
<title>Smart - Landlord</title>
<link rel="stylesheet" href="./landlord.css">
<style>
    .testimonials {
        overflow-y: hidden;

    }

    .testimonials::-webkit-scrollbar {
        display: none !important;
    }
</style>

<body class="landing_pages_template" data-new-gr-c-s-check-loaded="14.1196.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <div class="html-embed w-embed w-iframe"><!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV3RFN4"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </div>
    <?php include("nav.php") ?>
    <div id="home" class="section">
        <div class="div-block-5">
            <div id="w-node-_0fe408b6-8432-5306-8fe7-99af1a509c51-d3dfe811"><img
                    src="images/6306c5172caa0f5dcd8f9ce3_Bomahut-dashboard-laptop.png"
                    loading="eager" width="100" sizes="(max-width: 479px) 100vw, (max-width: 767px) 88vw, (max-width: 991px) 93vw, (max-width: 1439px) 49vw, 50vw"
                    alt="property-management-software-outline" srcset="../images/lapy.png" class="_100-width"></div>
            <div id="w-node-_0fe408b6-8432-5306-8fe7-99af1a509c53-d3dfe811">
                <div class="text-wrap _5vw-margin">
                    <h3 class="_2vw-margin center h3-title cf-colourful-text">More rental Profits, less Management Stress.</h3>
                    <p class="large-paragraph center _3vw-margin">Easy-to-use Property Management System. For landlords and Agents </p>
                    <div class="buttons-container"><a href="/session" id="get-started-free" data-event-category="Website Leads" data-event-label="free trial - landing page - tagline" data-w-id="0fe408b6-8432-5306-8fe7-99af1a509c5a" target="_blank" class="button-cta black ga-event w-node-_0fe408b6-8432-5306-8fe7-99af1a509c5a-d3dfe811 w-inline-block">
                            <div class="text-block-5">Get started free</div>
                        </a><a href="#schedule-demo-section" id="contact_us_cta" data-w-id="0fe408b6-8432-5306-8fe7-99af1a509c5d" class="button-cta black-grey ga-event w-inline-block">
                            <div class="text-block-5">Get a demo</div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Section -->

    <div>
        <div id="features-hide" class="section-copy">
            <div class="text-wrap _6vw-margin">
                <h3 class="h2-title center _2vw-margin">Why choose Smart Landlord?</h3>
                <p class="large-paragraph center _3vw-margin">Smart Landlord is a property management system that uses technology to make it easier to manager your rentals. Smart Landlord can help you with tenant billing, increasing rent collection, keeping updated tenant records, automating property management tasks, generating tenant reports, property statements and so much more. </p>
            </div>
            <div class="_3-columns-grid-copy">
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01d91-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0cbd71445e30de9963736_online-payments.svg" loading="lazy" width="27" alt="mobile payment icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Rent / Utility fee collection</h4>
                    </div>
                    <p class="paragraph">We integrate with popular payment methods such as Mpesa and Banks (Equity, KCB, Cooperative). Then, payments are automatically recorded on our system and we alert you on the specific tenant who has paid. Eliminates headaches of tenants lying about payments or losing receipts.</p>
                </div>
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01d98-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d482624858005c37653b_statements.svg" loading="lazy" width="25" alt="reports and statements image" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Invoice/Receipt Management</h4>
                    </div>
                    <p class="paragraph">Go paperless with SMS&nbsp;invoices and receipts. You can easily generate invoices and receipts on our platform and send them to tenants through SMS.<br></p>
                </div>
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01da0-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d3d850462b74995f8bff_tenant-statements.svg" loading="lazy" width="28" alt="tenant statement" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Updated Tenant records</h4>
                    </div>
                    <p class="paragraph">Digitized and accurate tenant records and account balances that are easy to sort through and maintain. Helps quickly resolve tenant disputes around account balances by keeping track of all tenant invoices and payments. </p>
                </div>
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01da7-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0cee7507b7f2ed0ee17f7_SMS.svg" loading="lazy" width="31" alt="property-management-system-sms icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">SMS services</h4>
                    </div>
                    <p class="paragraph">Easily communicate with tenants using SMS on tenant balances, announcements and so much more from the comfort of your home/office. Helping you save time from traveling to the property or meeting tenants.</p>
                </div>
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01dae-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0ca334594636b5718171a_Untitled%20design%20(2).svg" loading="lazy" width="27" alt="Automate icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Automate Property Management tasks</h4>
                    </div>
                    <p class="paragraph">Save time by automating repetitive tasks such as reminding tenants to pay, recording payments and sending receipts. Allowing you to easily scale and manage more properties.<br></p>
                </div>
                <div id="w-node-_09218cc2-7ba7-3f17-c2c4-2eb5cde01db6-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d57f2eac3625c150ebfd_accounting.svg" loading="lazy" width="26" alt="property-management-system-propertymanagementmadesimplerAccounting icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Reports and Statements</h4>
                    </div>
                    <p class="paragraph">Quickly generate tenant, property and landlord statements with the click of a button.</p>
                </div>
                <div class="button-arrow-wrap"></div>
            </div>
        </div>
        <div id="features" class="section-features">
            <div class="text-wrap _6vw-margin">
                <h3 class="h2-title center _2vw-margin">The Best Property Management Software in Kenya</h3>
                <p class="large-paragraph center _3vw-margin">Smart Landlord is one of the leading property management software companies in Kenya and throughout the continent. The Smart Landlord property management software allows you to do more than manage properties. Whether you manage 50 or 200+units, with Smart - Landlord, you can manage your units on autopilot and maximize your rental profits. Our property management software is available in all major towns in Kenya. </p>
            </div>
            <div class="_3-columns-grid-copy">
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d866b-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0cbd71445e30de9963736_online-payments.svg" loading="lazy" width="27" alt="mobile payment icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Payments Integration</h4>
                    </div>
                    <p class="paragraph">We integrate with popular payment methods such as Mpesa and all Banks. Then, payments are automatically recorded on our system and we alert you on the specific tenant who has paid. Eliminates headaches of tenants lying about payments or losing receipts.</p>
                </div>
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d8672-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d482624858005c37653b_statements.svg" loading="lazy" width="25" alt="reports and statements image" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Invoice/Receipt Management</h4>
                    </div>
                    <p class="paragraph">Go paperless with SMS&nbsp;invoices and receipts. You can easily generate invoices and receipts on our platform and send them to tenants through SMS.<br></p>
                </div>
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d867a-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d3d850462b74995f8bff_tenant-statements.svg" loading="lazy" width="28" alt="tenant statement" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Updated Tenant records</h4>
                    </div>
                    <p class="paragraph">Digitized and accurate tenant records and account balances that are easy to sort through and maintain. Helps quickly resolve tenant disputes around account balances by keeping track of all tenant invoices and payments. </p>
                </div>
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d8681-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0cee7507b7f2ed0ee17f7_SMS.svg" loading="lazy" width="31" alt="property-management-system-sms icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">SMS services</h4>
                    </div>
                    <p class="paragraph">Easily communicate with tenants using SMS on tenant balances, announcements and so much more from the comfort of your home/office. Helping you save time from traveling to the property or meeting tenants.</p>
                </div>
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d8688-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0ca334594636b5718171a_Untitled%20design%20(2).svg" loading="lazy" width="27" alt="Automate icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Automate Property Management tasks</h4>
                    </div>
                    <p class="paragraph">Save time by automating repetitive tasks such as reminding tenants to pay, recording payments and sending receipts. Allowing you to easily scale and manage more properties.<br></p>
                </div>
                <div id="w-node-_80a6898e-6a60-aa3b-be05-87b0121d8690-d3dfe811" class="div-block-4">
                    <div class="_1vw-margin"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61f0d57f2eac3625c150ebfd_accounting.svg" loading="lazy" width="26" alt="property-management-system-propertymanagementmadesimplerAccounting icon" class="medium-icon _1vw-margin">
                        <h4 class="h5-title">Reports and Statements</h4>
                    </div>
                    <p class="paragraph">Quickly generate tenant, property and landlord statements with the click of a button.</p>
                </div>
                <div class="button-arrow-wrap"></div>
            </div>
        </div>
    </div>
    <!-- Reviews Section -->
    <section class="cf-review-section testimonials">
        <div class="cf-wrapper-1200px">
            <div class="div-block-8">
                <div class="cf-review-header-wrapper">
                    <div class="cf-green-top-heading">REVIEWS</div>
                    <h2 class="cf-testimonial-h2-heading-copy">Our <span class="cf-colourful-text">clients&nbsp;</span>remarks</h2>
                </div>
                <div class="cf-reviewer-container">
                    <div data-delay="4000" data-animation="slide" class="cf-review-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true" role="region" aria-label="carousel">
                        <div class="cf-review-no-mask w-slider-mask" id="w-slider-mask-0">
                            <div class="cf-review-slide w-slide" aria-label="1 of 4" role="group" style="transition: all; transform: translateX(0px); opacity: 0;">
                                <div class="cf-review-slide-content">
                                    <div class="cf-review-star-wrapper"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star"></div>
                                    <div class="cf-review-content-wrapper">
                                        <div class="cf-review-head-text">Tenant Financial Management has now been fully automated thanks to Smart - Landlord</div>
                                        <div class="cf-review-para-text">Smart Landlord has helped us get rid of the mental fatigue that comes with managing a large number of units. Any time we need their help, their support team is always readily available.</div>
                                        <div class="cf-review-author-wrapper">
                                            <div class="cf-review-author-info-wrapper">
                                                <div class="cf-review-author-name">Terry Ng'ang'a</div>
                                                <div class="cf-review-author-job-title">CEO, Property Hall Investment<br></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cf-review-slide w-slide" aria-label="2 of 4" role="group" aria-hidden="true" style="transition: all; transform: translateX(0px); opacity: 0;">
                                <div class="cf-review-slide-content" aria-hidden="true">
                                    <div class="cf-review-star-wrapper" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"></div>
                                    <div class="cf-review-content-wrapper" aria-hidden="true">
                                        <div class="cf-review-head-text" aria-hidden="true">Rent and Utility invoicing has been simplified.</div>
                                        <div class="cf-review-para-text" aria-hidden="true">Before Smart - Landlord, I used quickbooks to manually invoice every tenant. With Smart Landlord tenant invoicing has been simplified. I can easily create rent and utility invoices in bulk. </div>
                                        <div class="cf-review-author-wrapper" aria-hidden="true">
                                            <div class="cf-review-author-info-wrapper" aria-hidden="true">
                                                <div class="cf-review-author-name" aria-hidden="true">Juliah Kibiru<br aria-hidden="true"></div>
                                                <div class="cf-review-author-job-title" aria-hidden="true">Landlord</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cf-review-slide w-slide" aria-label="3 of 4" role="group" aria-hidden="true" style="transition: all; transform: translateX(0px); opacity: 0;">
                                <div class="cf-review-slide-content" aria-hidden="true">
                                    <div class="cf-review-star-wrapper" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"></div>
                                    <div class="cf-review-content-wrapper" aria-hidden="true">
                                        <div class="cf-review-head-text" aria-hidden="true">Smart - Landlord's payment reminders have helped increase rent collection<br aria-hidden="true"></div>
                                        <div class="cf-review-para-text" aria-hidden="true">Smart - Landlord's payment reminders have also helped remind tenants to pay on time. In addition all tenant records are in a place allowing better organization of tenant financial records. We can easily know tenants with unpaid balances.</div>
                                        <div class="cf-review-author-wrapper" aria-hidden="true">
                                            <div class="cf-review-author-info-wrapper" aria-hidden="true">
                                                <div class="cf-review-author-name" aria-hidden="true">Titus Onsase<br aria-hidden="true"></div>
                                                <div class="cf-review-author-job-title" aria-hidden="true">Property Agent<br aria-hidden="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cf-review-slide w-slide" aria-label="4 of 4" role="group" aria-hidden="true" style="transition: all; transform: translateX(0px); opacity: 0;">
                                <div class="cf-review-slide-content" aria-hidden="true">
                                    <div class="cf-review-star-wrapper" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/6403915e6fa970fdb43094f8_Vector.svg" loading="lazy" alt="Smart Landlord review starts" class="cf-review-star" aria-hidden="true"></div>
                                    <div class="cf-review-content-wrapper" aria-hidden="true">
                                        <div class="cf-review-head-text" aria-hidden="true">Managing tenants has been made very simple</div>
                                        <div class="cf-review-para-text" aria-hidden="true">We no longer have to record payments as they come in or even invoice tenants every new month. Rent and Utility bills invoicing is automated as well as recording of payments. At this point, I can also send payment reminders which are also done in bulk and every tenant who has a balance receives a reminder. </div>
                                        <div class="cf-review-author-wrapper" aria-hidden="true">
                                            <div class="cf-review-author-info-wrapper" aria-hidden="true">
                                                <div class="cf-review-author-name" aria-hidden="true">Allan Tuikong</div>
                                                <div class="cf-review-author-job-title" aria-hidden="true">Landlord<br aria-hidden="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-live="off" aria-atomic="true" class="w-slider-aria-label" data-wf-ignore=""></div>
                        </div>
                        <div class="cf-left-arrow w-slider-arrow-left" role="button" tabindex="0" aria-controls="w-slider-mask-0" aria-label="previous slide"></div>
                        <div class="cf-right-arrow w-slider-arrow-right" role="button" tabindex="0" aria-controls="w-slider-mask-0" aria-label="next slide"></div>
                        <div class="cf-slide-nav w-slider-nav w-slider-nav-invert">
                            <div class="w-slider-dot w-active" data-wf-ignore="" aria-label="Show slide 1 of 4" aria-pressed="true" role="button" tabindex="0" style="margin-left: 3px; margin-right: 3px;"></div>
                            <div class="w-slider-dot" data-wf-ignore="" aria-label="Show slide 2 of 4" aria-pressed="false" role="button" tabindex="-1" style="margin-left: 3px; margin-right: 3px;"></div>
                            <div class="w-slider-dot" data-wf-ignore="" aria-label="Show slide 3 of 4" aria-pressed="false" role="button" tabindex="-1" style="margin-left: 3px; margin-right: 3px;"></div>
                            <div class="w-slider-dot" data-wf-ignore="" aria-label="Show slide 4 of 4" aria-pressed="false" role="button" tabindex="-1" style="margin-left: 3px; margin-right: 3px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section -->
    <div>
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
                    </div><a href="session" id="try_free_basic" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
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
                    </div><a href="session" id="start_now_standard" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
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
                    </div><a href="session" id="start_now_standard" data-event-category="Website Leads" data-event-label="Free Trial - Landing Page - Pricing" target="_blank" class="button black ga-event w-inline-block">
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
                    </div><a href="session/" id="start_now_premium" target="_blank" class="button black ga-event w-inline-block">
                        <div class="button-arrow-wrap">
                            <div class="button-arrow-circle"><img src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/61eca48c11315a1feac76c00_arrow_forward_black_24dp.svg" loading="lazy" alt="next" class="button-arrow"></div>
                        </div>
                        <div class="button-text">Start Now</div>
                    </a>
                </div>
            </div>
            <div class="text-block-2">For 100+ Units, Please contact us for pricing.</div>
        </div>
        <div id="FAQs" class="section">
            <h3 class="h3-title _2vw-margin">FAQs</h3>
            <div class="faq-line _2vw-margin"></div>
            <div class="_2-columns-grid">
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab938ff3-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">What is Smart - Landlord?<br></h5>
                        </div>
                        <p class="paragraph">Smart Landlord is a property management system for landlords and property managers in Kenya. Smart Landlord helps landlords and property managers save time and money by leveraging technology.<br></p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab939002-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Does the system have any downtimes?</h5>
                        </div>
                        <p class="paragraph">The system has no downtimes. We have backups for every part of our system so that there will be no interruption in service.</p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab939009-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Do I have to pay for any upgrades done in the system?<br></h5>
                        </div>
                        <p class="paragraph">You do not have to pay for any upgrades made to the system. We continuously improve the software at no cost to you.</p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab939010-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Is my data safe?</h5>
                        </div>
                        <p class="paragraph">Your data is safe. All data transmitted is SSL encrypted and all data is password protected so that only you and your authorized users have access to your data. We also hold backups on your data so that you never loose your data.</p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab939017-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Do you provide support?</h5>
                        </div>
                        <p class="paragraph">Yes, we provide support through email (support@smartlandlord.com) and phone (+254 717 512 483). You may contact us anytime between 8am-7pm (GMT+3, Kenyan time). Our team also offers training on how to use the system.</p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab93901e-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Can I export my data?</h5>
                        </div>
                        <p class="paragraph">Yes you can export the data such as invoices, payments and tenant records from our system into a spreadsheet.</p>
                    </div>
                </div>
                <div id="w-node-_24f76960-da2c-b3a3-2a2a-2b11ab939025-ab938fee" class="faq-card">
                    <div>
                        <div class="_1vw-margin">
                            <h5 class="h5-title">Can I communicate with tenants through the system?</h5>
                        </div>
                        <p class="paragraph">Yes you can communicate with tenants through the system to send announcements or send invoices and receipts. </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <?php include('footer.php') ?>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61eca48c11315a1923c76b16" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><iframe allow="join-ad-interest-group" data-tagging-id="AW-10951542317" data-load-time="1727247732264" height="0" width="0" src="https://td.doubleclick.net/td/rul/10951542317?random=1727247732239&amp;cv=11&amp;fst=1727247732239&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je49n0v899205911za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1366&amp;u_h=768&amp;url=https%3A%2F%2Fwww.bomahut.com%2F&amp;ref=https%3A%2F%2Fwww.bomahut.com%2Ffeatures&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Rental%20Property%20Management%20System%20in%20Kenya%20%7C%20Bomahut&amp;did=dZGVlNj&amp;gdid=dZGVlNj&amp;npa=0&amp;pscdl=noapi&amp;auid=161378018.1727111268&amp;uaa=x86&amp;uab=64&amp;uafvl=Google%2520Chrome%3B129.0.6668.59%7CNot%253DA%253FBrand%3B8.0.0.0%7CChromium%3B129.0.6668.59&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;"></iframe>
    <script src="https://cdn.prod.website-files.com/61eca48c11315a1923c76b16/js/webflow.966a898d9.js" type="text/javascript"></script><!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <!-- Collect UTM URL params and store as cookies so that they are always available even when a user switches pages -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- https://github.com/js-cookie/js-cookie -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</body>

</html>