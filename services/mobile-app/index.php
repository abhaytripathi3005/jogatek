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
                📱 Mobile App Development
            </span>

            <h1>
                Mobile Apps
                <span>For Android & iOS</span>
            </h1>

            <p>
                We build high-performance mobile applications with modern UI/UX,
                secure architecture and scalable backend systems for startups and enterprises.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=mobile_app" class="btn-primary">Start Project</a>
                <a href="<?php echo BASE_URL ?>portfolio" class="btn-secondary">View Work</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('mobile-app.png', 'Mobile App Development'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICES DETAILS
========================= -->

<section class="service-details" id="overview">

    <div class="container">

        <div class="section-header">
            <span>WHAT WE DO</span>
            <h2>Mobile App Development Services</h2>
            <p>End-to-end mobile solutions for modern businesses</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Android Apps</h3>
                <p>Native Android applications with smooth performance and clean UI.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🍏</div>
                <h3>iOS Apps</h3>
                <p>Premium iPhone & iPad apps with Apple guidelines compliance.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Flutter Apps</h3>
                <p>Cross-platform apps for Android & iOS using single codebase.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚛️</div>
                <h3>React Native Apps</h3>
                <p>Fast and scalable cross-platform mobile apps using React Native.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔗</div>
                <h3>Backend Integration</h3>
                <p>Secure APIs, databases and scalable cloud architecture.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>App Deployment</h3>
                <p>Play Store, App Store deployment and cloud hosting setup services.</p>
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
            <h2>How We Build Apps</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Analysis</h3>
                <p>Understanding business goals and technical requirements.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>UI/UX Design</h3>
                <p>Modern and user-friendly interface design for better experience.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Development</h3>
                <p>Clean coding with scalable architecture and best practices.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Testing & Deployment</h3>
                <p>Quality testing and smooth deployment to app stores.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Maintenance & Support</h3>
                <p>Regular updates, bug fixes and long-term technical support.</p>
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
            <h2>Why Choose Our Mobile Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🚀 High Performance</h3>
                <p>Optimized apps for speed and smooth user experience.</p>
            </div>

            <div class="why-card">
                <h3>🔒 Secure Architecture</h3>
                <p>Enterprise-grade security for data protection.</p>
            </div>

            <div class="why-card">
                <h3>📈 Scalable Solutions</h3>
                <p>Apps designed to grow with your business needs.</p>
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

            <h2>Ready to Build Your App?</h2>
            <p>Let’s create a powerful and modern app for your business.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=mobile_app" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include BASE_PATH.'/footer.php'; ?>