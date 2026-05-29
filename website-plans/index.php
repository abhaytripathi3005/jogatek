
<?php

/* =========================
   COUNTRY DETECTION
========================= */

$country =
$_SERVER['HTTP_CLOUDFRONT_VIEWER_COUNTRY']
?? 'IN';


/* =========================
   PRICING CONFIG
========================= */

switch($country){


    /* =========================
       INDIA
    ========================= */

    case 'IN':

        $currency = '₹';

        $static_price = '599';
        $dynamic_price = '999';

        $setup_static = '2499';
        $setup_dynamic = '3499';

    break;



    /* =========================
       SINGAPORE
    ========================= */

    case 'SG':

        $currency = 'S$';

        $static_price = '49';
        $dynamic_price = '99';

        $setup_static = '199';
        $setup_dynamic = '399';

    break;



    /* =========================
       UNITED STATES
    ========================= */

    case 'US':

        $currency = '$';

        $static_price = '39';
        $dynamic_price = '79';

        $setup_static = '149';
        $setup_dynamic = '299';

    break;



    /* =========================
       UNITED KINGDOM
    ========================= */

    case 'GB':

        $currency = '£';

        $static_price = '35';
        $dynamic_price = '69';

        $setup_static = '149';
        $setup_dynamic = '249';

    break;



    /* =========================
       AUSTRALIA
    ========================= */

    case 'AU':

        $currency = 'A$';

        $static_price = '59';
        $dynamic_price = '119';

        $setup_static = '249';
        $setup_dynamic = '449';

    break;



    /* =========================
       CANADA
    ========================= */

    case 'CA':

        $currency = 'C$';

        $static_price = '49';
        $dynamic_price = '99';

        $setup_static = '199';
        $setup_dynamic = '399';

    break;



    /* =========================
       UAE
    ========================= */

    case 'AE':

        $currency = 'AED ';

        $static_price = '149';
        $dynamic_price = '299';

        $setup_static = '599';
        $setup_dynamic = '999';

    break;



    /* =========================
       SAUDI ARABIA
    ========================= */

    case 'SA':

        $currency = 'SAR ';

        $static_price = '149';
        $dynamic_price = '299';

        $setup_static = '599';
        $setup_dynamic = '999';

    break;



    /* =========================
       QATAR
    ========================= */

    case 'QA':

        $currency = 'QAR ';

        $static_price = '149';
        $dynamic_price = '299';

        $setup_static = '599';
        $setup_dynamic = '999';

    break;



    /* =========================
       MALAYSIA
    ========================= */

    case 'MY':

        $currency = 'RM ';

        $static_price = '99';
        $dynamic_price = '199';

        $setup_static = '399';
        $setup_dynamic = '699';

    break;



    /* =========================
       DEFAULT
    ========================= */

    default:

        $currency = '$';

        $static_price = '39';
        $dynamic_price = '79';

        $setup_static = '149';
        $setup_dynamic = '299';

    break;

}

include __DIR__ . '/../header.php';
?>

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                💼 Website Plans
            </span>
            <h1>

                <?php

                echo '<span>Website Plans</span> Starting at <span> '
                . $currency
                . $static_price
                . '/Month</span>';

                ?>
            </h1>


            <p>
                Get a professional business website with hosting,
                domain, SSL and support included.
                Choose a monthly plan or contact us
                for custom website development.
            </p>

            <div class="hero-buttons">

                <a href="#pricing-plans"
                   class="btn-primary">

                    View Plans

                </a>

                <a href="<?php echo BASE_URL ?>contact-us"
                   class="btn-secondary">

                    Contact Us

                </a>

            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">

                <?php picture_img(
                    'website-plans.png',
                    'Website Plans'
                ); ?>

            </div>

        </div>

    </div>

</section>



<!-- =========================
     PRICING PLANS
========================= -->

<section class="service-details"
         id="pricing-plans">

    <div class="container">

        <div class="section-header">

            <span>PRICING</span>

            <h2>
                Choose Your Website Plan
            </h2>

            <p>
                Simple, transparent and business-friendly
                website plans with hosting, domain,
                SSL and GST included.
            </p>

        </div>



        <div class="engagement-grid">

            <!-- STATIC PLAN -->

            <div class="engagement-card">

                <!-- <div class="engagement-icon">
                    🌐
                </div> -->

                <h3>
                    Static Website Plan
                </h3>

                <h2 style="font-size:34px;margin:10px 0;">

                    <?php echo $currency . $static_price; ?>

                    <span style="font-size:16px;color:#94a3b8;">
                        /month
                    </span>

                </h2>

                <p style="color:#60a5fa;font-weight:600;">

                    One-time setup:
                    <?php echo $currency . $setup_static; ?>

                </p>

                <p style="font-size:13px;color:#94a3b8;">

                    Inclusive of all taxes

                </p>

                <p>
                    Best for small businesses,
                    portfolio websites,
                    service websites and landing pages.
                </p>

                <ul class="important-notes-list"
                    style="margin-top:20px;text-align:left;">

                    <li>Up to 5 static pages</li>

                    <li>Hosting included</li>

                    <li>Domain included</li>

                    <li>SSL certificate</li>

                    <li>Mobile responsive design</li>

                    <li>Basic SEO setup</li>

                    <li>Contact form</li>

                </ul>

                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development"
                   class="btn-primary"
                   style="margin-top:25px;">

                    Get Started

                </a>

            </div>



            <!-- DYNAMIC PLAN -->

            <div class="engagement-card featured-plan">

                <!-- <div class="engagement-icon">
                    ⚙️
                </div> -->
                <div class="featured-badge">
                    MOST POPULAR
                </div>

                <h3>
                    Dynamic Website Plan
                </h3>

                <h2 style="font-size:34px;margin:10px 0;">

                    <?php echo $currency . $dynamic_price; ?>

                    <span style="font-size:16px;color:#94a3b8;">
                        /month
                    </span>

                </h2>

                <p style="color:#60a5fa;font-weight:600;">

                    One-time setup:
                    <?php echo $currency . $setup_dynamic; ?>

                </p>

                <p style="font-size:13px;color:#94a3b8;">

                    Inclusive of all taxes

                </p>

                <p>
                    Best for businesses that need
                    content management through
                    an admin panel.
                </p>

                <ul class="important-notes-list"
                    style="margin-top:20px;text-align:left;">

                    <li>Dynamic website</li>

                    <li>Admin panel included</li>

                    <li>Hosting included</li>

                    <li>Domain included</li>

                    <li>SSL certificate</li>

                    <li>Basic SEO setup</li>

                    <li>Content update control</li>

                    <li>Database support</li>

                </ul>

                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_application"
                   class="btn-primary"
                   style="margin-top:25px;">

                    Get Started

                </a>

            </div>



            <!-- CUSTOM WEBSITE -->

            <div class="engagement-card">

                <!-- <div class="engagement-icon">
                    🛠️
                </div> -->

                <h3>
                    Custom Website Development
                </h3>

                <h2 style="font-size:34px;margin:10px 0;">

                    Custom Pricing

                </h2>

                <p style="color:#60a5fa;font-weight:600;">

                    Contact for pricing

                </p>

                <p>
                    Best for clients who only want
                    website development and want
                    to manage hosting/domain separately.
                </p>

                <ul class="important-notes-list"
                    style="margin-top:20px;text-align:left;">

                    <li>Custom design</li>

                    <li>Static or dynamic website</li>

                    <li>Admin panel optional</li>

                    <li>Hosting not included</li>

                    <li>Domain not included</li>

                    <li>One-time project pricing</li>

                    <li>Custom features available</li>

                </ul>

                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development"
                   class="btn-secondary"
                   style="margin-top:25px;">

                    Contact for Pricing

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================
     COMPARISON TABLE
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">

            <span>COMPARE</span>

            <h2>
                Plan Comparison
            </h2>

            <p>
                Compare website plans and choose
                what fits your business.
            </p>

        </div>

        <div class="comparison-table-wrapper">

            <table class="comparison-table">

                <thead>

                    <tr>

                        <th>Feature</th>

                        <th>Static Plan</th>

                        <th>Dynamic Plan</th>

                        <th>Custom Website</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Monthly Price</td>

                        <td>
                            <?php echo $currency . $static_price; ?>/month
                        </td>

                        <td>
                            <?php echo $currency . $dynamic_price; ?>/month
                        </td>

                        <td>
                            Contact for pricing
                        </td>

                    </tr>

                    <tr>

                        <td>Setup Charge</td>

                        <td>
                            <?php echo $currency . $setup_static; ?>
                        </td>

                        <td>
                            <?php echo $currency . $setup_dynamic; ?>
                        </td>

                        <td>
                            Based on scope
                        </td>

                    </tr>

                    <tr>

                        <td>Hosting</td>

                        <td>Included</td>

                        <td>Included</td>

                        <td>Not included</td>

                    </tr>

                    <tr>

                        <td>Domain</td>

                        <td>Included</td>

                        <td>Included</td>

                        <td>Not included</td>

                    </tr>

                    <tr>

                        <td>SSL</td>

                        <td>Included</td>

                        <td>Included</td>

                        <td>Optional</td>

                    </tr>

                    <tr>

                        <td>Admin Panel</td>

                        <td>No</td>

                        <td>Yes</td>

                        <td>Optional</td>

                    </tr>

                    <tr>

                        <td>Pricing</td>

                        <td>All Inclusive</td>

                        <td>All Inclusive</td>

                        <td>Based on requirement</td>

                    </tr>

                    <tr>

                        <td>Best For</td>

                        <td>Small business websites</td>

                        <td>Content-managed websites</td>

                        <td>Custom requirements</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>



<!-- =========================
     CTA
========================= -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>
                Need Help Choosing a Plan?
            </h2>

            <p>
                Tell us your business requirement
                and we’ll suggest the right
                website plan.
            </p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development"
               class="btn-primary">

                Talk to Us

            </a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>