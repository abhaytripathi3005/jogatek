<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     STARTUP HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🚀 Startup Solutions
            </span>

            <h1>
                Build & Scale Your <span>Startup Faster</span>
            </h1>

            <p>
                We help startups turn ideas into scalable digital products with end-to-end development, design, and deployment support.
            </p>

            <div class="hero-buttons">
                <a href="#solutions" class="btn-primary">Explore Solutions</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('startup-solutions.png', 'Startup Solutions'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SOLUTIONS
========================= -->

<section class="service-details" id="solutions">

    <div class="container">

        <div class="section-header">
            <span>WHAT WE DO</span>
            <h2>End-to-End Startup Support</h2>
            <p>Everything you need to launch and grow your startup</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>Product Idea Validation</h3>
                <p>We help refine your idea into a market-ready concept.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🧠</div>
                <h3>UI/UX & Branding</h3>
                <p>Modern design and strong brand identity for your product.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>MVP Development</h3>
                <p>Fast development of MVP to test your startup in real market.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile & Web Apps</h3>
                <p>Scalable apps using Flutter, PHP, Node.js and modern stacks.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Deployment</h3>
                <p>Secure and scalable hosting setup for your startup.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📈</div>
                <h3>Growth Support</h3>
                <p>Technical support and scaling guidance after launch.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     STARTUP BENEFITS
========================= -->

<section class="why-choose">

    <div class="container">

        <div class="section-header">
            <span>BENEFITS</span>
            <h2>Why Startups Choose Us</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>⚡ Fast Execution</h3>
                <p>Quick MVP development to reduce time-to-market.</p>
            </div>

            <div class="why-card">
                <h3>💰 Cost Effective</h3>
                <p>Flexible pricing models for early-stage startups.</p>
            </div>

            <div class="why-card">
                <h3>📊 Scalable Architecture</h3>
                <p>Systems designed to grow with your user base.</p>
            </div>

            <!-- <div class="why-card">
                <h3>🧩 Full Stack Support</h3>
                <p>From frontend to backend to deployment, everything covered.</p>
            </div> -->

        </div>

    </div>

</section>

<!-- =========================
     CTA
========================= -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>Ready to Launch Your Startup?</h2>
            <p>Let’s turn your idea into a scalable product.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>