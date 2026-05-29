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

    case 'IN':
        $currency = '₹';
        $static_price = '599';
        $dynamic_price = '999';
        $setup_static = '2499';
        $setup_dynamic = '3499';
    break;

    case 'SG':
        $currency = 'S$';
        $static_price = '49';
        $dynamic_price = '99';
        $setup_static = '199';
        $setup_dynamic = '399';
    break;

    case 'US':
        $currency = '$';
        $static_price = '39';
        $dynamic_price = '79';
        $setup_static = '149';
        $setup_dynamic = '299';
    break;

    case 'GB':
        $currency = '£';
        $static_price = '35';
        $dynamic_price = '69';
        $setup_static = '149';
        $setup_dynamic = '249';
    break;

    case 'AU':
        $currency = 'A$';
        $static_price = '59';
        $dynamic_price = '119';
        $setup_static = '249';
        $setup_dynamic = '449';
    break;

    case 'CA':
        $currency = 'C$';
        $static_price = '49';
        $dynamic_price = '99';
        $setup_static = '199';
        $setup_dynamic = '399';
    break;

    case 'AE':
        $currency = 'AED ';
        $static_price = '149';
        $dynamic_price = '299';
        $setup_static = '599';
        $setup_dynamic = '999';
    break;

    case 'SA':
        $currency = 'SAR ';
        $static_price = '149';
        $dynamic_price = '299';
        $setup_static = '599';
        $setup_dynamic = '999';
    break;

    case 'QA':
        $currency = 'QAR ';
        $static_price = '149';
        $dynamic_price = '299';
        $setup_static = '599';
        $setup_dynamic = '999';
    break;

    case 'MY':
        $currency = 'RM ';
        $static_price = '99';
        $dynamic_price = '199';
        $setup_static = '399';
        $setup_dynamic = '699';
    break;

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

<!-- =========================
     FAQ HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                ❓ FAQ
            </span>

            <h1>
                Frequently Asked <span>Questions</span>
            </h1>

            <p>
                Find answers about our services, website plans, pricing, development process, hosting, support, and maintenance.
            </p>

            <div class="hero-buttons">
                <a href="#faq" class="btn-primary">View Answers</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('faq.png', 'FAQ'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     FAQ SECTION
========================= -->

<section class="faq" id="faq">

    <div class="container">

        <div class="section-header">
            <span>SUPPORT</span>
            <h2>Common Questions</h2>
            <p>Everything you need to know before starting a project</p>
        </div>

        <div class="faq-wrapper">

    <div class="faq-item">
        <h3>What services does JogaTek provide?</h3>
        <p>
            JogaTek provides website development, mobile app development,
            web applications, admin panels, cloud deployment,
            QA testing, maintenance support,
            and dedicated developer hiring.
        </p>
    </div>

    <div class="faq-item">
        <h3>Do you offer affordable website plans?</h3>
        <p>
            Yes. Our static website plan starts at
            <?php echo $currency . $static_price; ?>/month
            and our dynamic website plan starts at
            <?php echo $currency . $dynamic_price; ?>/month,
            based on your country.
        </p>
    </div>

    <div class="faq-item">
        <h3>What is included in the static website plan?</h3>
        <p>
            The static website plan includes hosting, domain,
            SSL certificate, responsive design,
            basic SEO setup, contact form, and support.
        </p>
    </div>

    <div class="faq-item">
        <h3>What is included in the dynamic website plan?</h3>
        <p>
            The dynamic website plan includes admin panel,
            database support, content update control,
            hosting, SSL, and maintenance support.
        </p>
    </div>

    <div class="faq-item">
        <h3>Is there any one-time setup charge?</h3>
        <p>
            Yes. The static website setup charge is
            <?php echo $currency . $setup_static; ?>
            and the dynamic website setup charge is
            <?php echo $currency . $setup_dynamic; ?>.
        </p>
    </div>

    <div class="faq-item">
        <h3>Is hosting and domain included?</h3>
        <p>
            Yes, hosting and domain are included in our website plans.
            For custom website development,
            hosting and domain can also be managed separately.
        </p>
    </div>

    <div class="faq-item">
        <h3>Can I choose only website development without hosting and domain?</h3>
        <p>
            Yes. If you already have hosting and domain,
            we can provide only website development
            with custom pricing.
        </p>
    </div>

    <div class="faq-item">
        <h3>Can I upgrade from static to dynamic website later?</h3>
        <p>
            Yes, you can upgrade anytime as your business grows
            and requires admin panel or advanced functionality.
        </p>
    </div>

    <div class="faq-item">
        <h3>How long does a website project take?</h3>
        <p>
            A basic static website usually takes around
            5–10 working days.
            Dynamic websites and custom projects
            may take longer depending on features and scope.
        </p>
    </div>

    <div class="faq-item">
        <h3>Do you build Android, iOS, and Web applications?</h3>
        <p>
            Yes. We build complete Android, iOS,
            and Web platforms including mobile apps,
            admin panels, dashboards,
            SaaS products, booking systems,
            and enterprise applications.
        </p>
    </div>

    <div class="faq-item">
        <h3>What technologies does JogaTek use?</h3>
        <p>
            We work with Flutter, React, PHP, Node.js,
            Python, MySQL, MongoDB, Firebase, AWS,
            Docker, CI/CD, AI integrations,
            automation systems, and scalable cloud infrastructure.
        </p>
    </div>

    <div class="faq-item">
        <h3>Do you provide cloud deployment and DevOps support?</h3>
        <p>
            Yes. We provide AWS deployment,
            VPS setup, Docker, CI/CD pipelines,
            SSL installation, hosting setup,
            and server management.
        </p>
    </div>

    <div class="faq-item">
        <h3>Do you provide maintenance and technical support?</h3>
        <p>
            Yes. We provide ongoing maintenance,
            bug fixes, updates, backups,
            server monitoring, SSL support,
            performance optimization,
            hosting assistance,
            and technical support after project delivery.
        </p>
    </div>

    <div class="faq-item">
        <h3>Can I hire dedicated developers?</h3>
        <p>
            Yes, we offer dedicated developer hiring
            for startups, agencies, and businesses
            needing long-term development support.
        </p>
    </div>

</div>

    </div>

</section>

<!-- =========================
     CTA
========================= -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>Still Have Questions?</h2>
            <p>Let’s discuss your project and suggest the right plan for your business.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Contact Now</a>

        </div>

    </div>

</section>

<script type="application/ld+json">
<?php
echo json_encode([
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [

        [
            "@type" => "Question",
            "name" => "What services does JogaTek provide?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "JogaTek provides website development, mobile app development, web applications, admin panels, cloud deployment, QA testing, maintenance support, and dedicated developer hiring."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Do you offer affordable website plans?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes. JogaTek offers affordable static and dynamic website plans with pricing shown according to the visitor’s country."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "What is included in the static website plan?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "The static website plan includes hosting, domain, SSL certificate, responsive design, basic SEO setup, contact form, and support."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "What is included in the dynamic website plan?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "The dynamic website plan includes admin panel, database support, content update control, hosting, SSL, and maintenance support."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Is hosting and domain included?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, hosting and domain are included in website plans. For custom website development, hosting and domain can also be managed separately."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Can I upgrade from static to dynamic website later?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, clients can upgrade from a static website to a dynamic website whenever their business requires an admin panel or advanced functionality."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Do you build Android, iOS, and Web applications?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, JogaTek builds complete Android, iOS, and Web platforms including mobile apps, admin panels, dashboards, SaaS products, booking systems, and enterprise applications."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "What technologies does JogaTek use?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "JogaTek works with Flutter, React, PHP, Node.js, Python, MySQL, MongoDB, Firebase, AWS, Docker, CI/CD, AI integrations, automation systems, and scalable cloud infrastructure."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Do you provide cloud deployment and DevOps support?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, JogaTek provides AWS deployment, VPS setup, Docker, CI/CD pipelines, SSL installation, hosting setup, and server management."
            ]
        ],

        [
            "@type" => "Question",
            "name" => "Do you provide maintenance and technical support?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, JogaTek provides ongoing maintenance, bug fixes, updates, backups, server monitoring, SSL support, performance optimization, hosting assistance, and technical support after project delivery."
            ]
        ]

    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>