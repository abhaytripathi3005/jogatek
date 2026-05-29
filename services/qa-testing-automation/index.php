<?php 
include __DIR__ . '/../../header.php';
?>

<!-- =========================
     SERVICE HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🧪 QA Testing & Automation
            </span>

            <h1>
                Reliable <span>Software Quality Assurance</span>
            </h1>

            <p>
                We ensure your web and mobile applications are bug-free, stable, and high-performing through
                manual testing, automation testing, and continuous quality checks.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=qa_testing" class="btn-primary">Start Testing</a>
                <a href="<?php echo BASE_URL ?>portfolio" class="btn-secondary">View Portfolio</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('qa-testing.png', 'QA Testing & Automation'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICE DETAILS
========================= -->

<section class="service-details">

    <div class="container">

        <div class="section-header">
            <span>WHAT WE DO</span>
            <h2>QA Testing Services</h2>
            <p>End-to-end testing for stable and scalable applications</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🐞</div>
                <h3>Manual Testing</h3>
                <p>Detailed testing to identify UI, UX, and functional issues.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🤖</div>
                <h3>Automation Testing</h3>
                <p>Automated scripts for faster and reliable regression testing.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile App Testing</h3>
                <p>Testing across Android and iOS devices for smooth performance.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Web App Testing</h3>
                <p>Cross-browser and performance testing for web applications.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Performance Testing</h3>
                <p>Testing application speed, stability and responsiveness under heavy usage.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Security Testing</h3>
                <p>Identifying vulnerabilities and ensuring secure application behavior.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     PROCESS SECTION
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">
            <span>PROCESS</span>
            <h2>How We Test Your Product</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Review</h3>
                <p>Understanding application flow and expected behavior.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Test Planning</h3>
                <p>Creating test cases and defining QA strategy.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Execution</h3>
                <p>Manual + automated testing to detect issues.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Bug Reporting</h3>
                <p>Detailed reports with fixes and improvement suggestions.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Performance Testing</h3>
                <p>Checking application speed, stability and load handling capacity.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Maintenance Support</h3>
                <p>Continuous monitoring, issue fixing and post-launch QA support.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     WHY CHOOSE US
========================= -->

<section class="why-choose">

    <div class="container">

        <div class="section-header">
            <span>WHY US</span>
            <h2>Why Choose Our QA Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🔍 Error-Free Delivery</h3>
                <p>We reduce production bugs and improve stability.</p>
            </div>

            <div class="why-card">
                <h3>⚙️ Automation First Approach</h3>
                <p>Faster regression cycles with automation frameworks.</p>
            </div>

            <div class="why-card">
                <h3>📊 Quality Focused</h3>
                <p>We ensure your product meets real user expectations.</p>
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

            <h2>Let’s Make Your Product Bug-Free</h2>
            <p>Get professional QA testing for your web and mobile applications.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=qa_testing" class="btn-primary">Start QA Process</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>