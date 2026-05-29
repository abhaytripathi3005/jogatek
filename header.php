<?php
include 'config.php';

$meta = get_seo_meta();
$canonical = get_canonical_url();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo seo_escape($meta['title']); ?></title>
    <meta name="description" content="<?php echo seo_escape($meta['description']); ?>">
    <meta name="keywords" content="<?php echo seo_escape($meta['keywords']); ?>">
    <meta name="author" content="<?php echo seo_escape(COMPANY_NAME); ?>">
    <meta name="robots" content="<?php echo seo_escape($meta['robots']); ?>">
    <link rel="canonical" href="<?php echo seo_escape($canonical); ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo seo_escape(SITE_NAME); ?>">
    <meta property="og:title" content="<?php echo seo_escape($meta['title']); ?>">
    <meta property="og:description" content="<?php echo seo_escape($meta['description']); ?>">
    <meta property="og:url" content="<?php echo seo_escape($canonical); ?>">
    <meta property="og:image" content="<?php echo seo_escape($meta['image_url']); ?>">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo seo_escape($meta['title']); ?>">
    <meta name="twitter:description" content="<?php echo seo_escape($meta['description']); ?>">
    <meta name="twitter:image" content="<?php echo seo_escape($meta['image_url']); ?>">

    <!-- <link rel="icon" type="image/png" href="<?php //echo BASE_URL ?>assets/images/jogatek-logo.png"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL ?>assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL ?>assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL ?>assets/images/favicon-16x16.png">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?php echo BASE_URL ?>site.webmanifest">

    <script type="application/ld+json"><?php
    echo json_encode(get_organization_schema(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    ?></script>

    <script type="application/ld+json"><?php
    echo json_encode(get_website_schema(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    ?></script>

    <?php
    $breadcrumbSchema = get_breadcrumb_schema();
    if ($breadcrumbSchema):
    ?>
    <script type="application/ld+json"><?php
    echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    ?></script>
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet"
          href="<?php echo BASE_URL ?>assets/css/style.css">

</head>

<body>

<!-- =========================
     HEADER
========================= -->

<header class="header">

    <div class="container nav-wrapper">

        <a href="<?php echo BASE_URL ?>" class="logo">
            <img src="<?php echo BASE_URL ?>assets/images/jogatek-logo.png" alt="JogaTek Logo">
        </a>

        <nav>
            <ul class="nav-links">

                <li><a href="<?php echo BASE_URL ?>" class="<?php echo trim(nav_link_active('home')); ?>">Home</a></li>

                <!-- SERVICES DROPDOWN -->
                <li class="dropdown<?php echo nav_menu_active('services'); ?>">
                    <a href="javascript:void(0)">Services <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL ?>services" class="<?php echo trim(nav_link_active('services')); ?>">Our Services</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/mobile-app" class="<?php echo trim(nav_link_active('services/mobile-app')); ?>">Mobile App Development</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/website-development" class="<?php echo trim(nav_link_active('services/website-development')); ?>">Website Development</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/web-applications" class="<?php echo trim(nav_link_active('services/web-applications')); ?>">Web Applications</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/qa-testing-automation" class="<?php echo trim(nav_link_active('services/qa-testing-automation')); ?>">QA Testing</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/maintenance-support" class="<?php echo trim(nav_link_active('services/maintenance-support')); ?>">Maintenance</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/cloud-deployment" class="<?php echo trim(nav_link_active('services/cloud-deployment')); ?>">Cloud & Deployment</a></li>
                        <li><a href="<?php echo BASE_URL ?>services/dedicated-developers" class="<?php echo trim(nav_link_active('services/dedicated-developers')); ?>">Dedicated Developers</a></li>
                    </ul>
                </li>

                <!-- ENGAGEMENT MODELS DROPDOWN -->
                <li class="dropdown<?php echo nav_menu_active('engagement'); ?>">
                    <a href="javascript:void(0)">Engagement Models <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL ?>engagement-models" class="<?php echo trim(nav_link_active('engagement-models')); ?>">Our Engagement Models</a></li>
                        <li><a href="<?php echo BASE_URL ?>engagement-models/fixed-cost" class="<?php echo trim(nav_link_active('engagement-models/fixed-cost')); ?>">Fixed Cost Projects</a></li>
                        <li><a href="<?php echo BASE_URL ?>engagement-models/hourly-hiring" class="<?php echo trim(nav_link_active('engagement-models/hourly-hiring')); ?>">Hourly Hiring</a></li>
                        <li><a href="<?php echo BASE_URL ?>engagement-models/dedicated-team" class="<?php echo trim(nav_link_active('engagement-models/dedicated-team')); ?>">Dedicated Team</a></li>
                        <li><a href="<?php echo BASE_URL ?>engagement-models/staff-augmentation" class="<?php echo trim(nav_link_active('engagement-models/staff-augmentation')); ?>">Staff Augmentation</a></li>
                        <li><a href="<?php echo BASE_URL ?>engagement-models/maintenance-contracts" class="<?php echo trim(nav_link_active('engagement-models/maintenance-contracts')); ?>">Maintenance Contracts</a></li>
                    </ul>
                </li>

                <!-- PRODUCTS (External) -->
                <li class="dropdown">
                    <a href="javascript:void(0)">TekSathi <i class="fa fa-external-link"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="https://teksathi.com/solutions/healthcare/" target="_blank">Healthcare</a></li>
                        <li><a href="https://teksathi.com" target="_blank">Membership Clubs</a></li>
                        <li><a href="https://teksathi.com" target="_blank">Facility Booking</a></li>
                        <li><a href="https://teksathi.com" target="_blank">Beauty & Wellness</a></li>
                        <li><a href="https://teksathi.com" target="_blank">Fitness & Sports</a></li>
                        <li><a href="https://teksathi.com" target="_blank">Events & Entertainment</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo BASE_URL ?>portfolio" class="<?php echo trim(nav_link_active('portfolio')); ?>">Portfolio</a></li>

                <li class="dropdown<?php echo nav_menu_active('company'); ?>">
                    <a href="javascript:void(0)">Company <i class="fa fa-angle-down"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASE_URL ?>about-us" class="<?php echo trim(nav_link_active('about-us')); ?>">About Us</a></li>
                        <li><a href="<?php echo BASE_URL ?>why-choose-us" class="<?php echo trim(nav_link_active('why-choose-us')); ?>">Why Us</a></li>
                        <li><a href="<?php echo BASE_URL ?>our-process" class="<?php echo trim(nav_link_active('our-process')); ?>">Our Process</a></li>
                        <li><a href="<?php echo BASE_URL ?>industries" class="<?php echo trim(nav_link_active('industries')); ?>">Industries</a></li>
                        <li><a href="<?php echo BASE_URL ?>technologies" class="<?php echo trim(nav_link_active('technologies')); ?>">Technologies</a></li>
                        <li><a href="<?php echo BASE_URL ?>testimonials" class="<?php echo trim(nav_link_active('testimonials')); ?>">Testimonials</a></li>
                    </ul>
                        <li>
                            <a href="<?php echo BASE_URL ?>website-plans"
                               class="<?php echo trim(nav_link_active('website-plans')); ?>">
                               Website Pricing
                            </a>
                        </li>
                </li>

            </ul>
        </nav>

        <a href="<?php echo BASE_URL ?>contact-us" class="header-btn<?php echo nav_link_active('contact-us'); ?>">
            Start Project
        </a>

        <div class="mobile-menu-btn">☰</div>

    </div>

</header>
