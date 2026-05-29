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
                ☁️ Cloud & Deployment
            </span>

            <h1>
                Scalable <span>Cloud Infrastructure & Deployment</span>
            </h1>

            <p>
                We help you deploy, manage, and scale your applications on modern cloud platforms with high
                availability, performance optimization, and secure infrastructure setup.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=cloud_deployment" class="btn-primary">Deploy Now</a>
                <a href="#cloud-services" class="btn-secondary">View Cloud Services</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('cloud-deployment.png', 'Cloud & Deployment'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICE DETAILS
========================= -->

<section class="service-details" id="cloud-services">

    <div class="container">

        <div class="section-header">
            <span>WHAT WE DO</span>
            <h2>Cloud & Deployment Services</h2>
            <p>Reliable infrastructure for modern applications</p>
        </div>

        <div class="service-grid">
            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Application Deployment</h3>
                <p>Seamless deployment of web and mobile backend systems.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Setup</h3>
                <p>Setup on AWS, Google Cloud, or other cloud platforms.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🖥️</div>
                <h3>Managed Hosting</h3>
                <p>We also host applications on our own high-performance servers.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>CI/CD Pipeline</h3>
                <p>Automated deployment pipeline for faster releases.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Server Security</h3>
                <p>Firewall, SSL, and secure server configuration.</p>
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
            <h2>How We Deploy Your System</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Architecture Planning</h3>
                <p>Define scalable cloud architecture based on requirements.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Server Setup</h3>
                <p>Configure cloud servers and required environments.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Deployment</h3>
                <p>Deploy application with testing and optimization.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Monitoring</h3>
                <p>Continuous monitoring for uptime and performance.</p>
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
            <h2>Why Choose Our Cloud Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>⚡ High Availability</h3>
                <p>Reliable infrastructure with minimal downtime.</p>
            </div>

            <div class="why-card">
                <h3>📈 Scalable Systems</h3>
                <p>Easy scaling as your user base grows.</p>
            </div>

            <div class="why-card">
                <h3>🔐 Secure Deployment</h3>
                <p>Industry-standard security practices for all deployments.</p>
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

            <h2>Ready to Deploy Your Application?</h2>
            <p>Get secure, fast, and scalable cloud deployment for your product.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=cloud_deployment" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>