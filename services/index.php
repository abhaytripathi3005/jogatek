<?php
include __DIR__ . '/../header.php';
?>

<!-- =========================
     SERVICES HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🚀 Our Services
            </span>

            <h1>
                End-To-End <span>IT Solutions</span>
            </h1>

            <p>
                From mobile apps and websites to enterprise software, QA testing, cloud deployment,
                and dedicated developers — JogaTek delivers complete technology services for your business.
            </p>

            <div class="hero-buttons">
                <a href="#services" class="btn-primary">Explore Services</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('services.png', 'JogaTek IT Services'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICES LIST
========================= -->

<section class="service-details" id="services">

    <div class="container">

        <div class="section-header">
            <span>OUR SERVICES</span>
            <h2>Software Services We Offer</h2>
            <p>Choose a service to learn more about how we can help your business grow</p>
        </div>

        <div class="engagement-grid services-page-grid">

            <div class="engagement-card">
                <div class="engagement-icon">📱</div>
                <h3>Mobile App Development</h3>
                <p>Android and iOS app development using Flutter and modern frameworks.</p>
                <a href="<?php echo BASE_URL ?>services/mobile-app" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">💻</div>
                <h3>Website Development</h3>
                <p>Premium responsive websites for startups and enterprises.</p>
                <a href="<?php echo BASE_URL ?>services/website-development" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">⚙️</div>
                <h3>Web Applications</h3>
                <p>Dashboards, admin panels, ERP systems, and business portals.</p>
                <a href="<?php echo BASE_URL ?>services/web-applications" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">🧪</div>
                <h3>Testing & QA</h3>
                <p>Manual testing, automation, and software quality assurance.</p>
                <a href="<?php echo BASE_URL ?>services/qa-testing-automation" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">☁️</div>
                <h3>Cloud & Deployment</h3>
                <p>Server deployment, hosting, DevOps, and cloud infrastructure setup.</p>
                <a href="<?php echo BASE_URL ?>services/cloud-deployment" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">👨‍💻</div>
                <h3>Dedicated Developers</h3>
                <p>Hire remote developers, testers, and dedicated teams for your projects.</p>
                <a href="<?php echo BASE_URL ?>services/dedicated-developers" class="btn-secondary">Know More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">🔧</div>
                <h3>Maintenance & Support</h3>
                <p>Ongoing updates, bug fixes, and reliable post-launch application support.</p>
                <a href="<?php echo BASE_URL ?>services/maintenance-support" class="btn-secondary">Know More</a>
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

            <h2>Need a Custom Software Solution?</h2>
            <p>Tell us about your project and we will recommend the right service for you.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Start Your Project</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>
