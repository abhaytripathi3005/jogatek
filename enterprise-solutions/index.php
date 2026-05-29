<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     ENTERPRISE HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🏢 Enterprise Solutions
            </span>

            <h1>
                Scalable Systems for <span>Large Businesses</span>
            </h1>

            <p>
                We build secure, high-performance enterprise-grade software tailored for complex business operations and large-scale users.
            </p>

            <div class="hero-buttons">
                <a href="#solutions" class="btn-primary">Explore Solutions</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('enterprise-solutions.png', 'Enterprise Solutions'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     ENTERPRISE SERVICES
========================= -->

<section class="service-details" id="solutions">

    <div class="container">

        <div class="section-header">
            <span>ENTERPRISE</span>
            <h2>What We Offer</h2>
            <p>End-to-end enterprise digital transformation services</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🏗️</div>
                <h3>Custom ERP Systems</h3>
                <p>Fully customized ERP solutions for business automation and management.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Business Dashboards</h3>
                <p>Real-time analytics dashboards for data-driven decision making.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔐</div>
                <h3>Secure Architecture</h3>
                <p>Enterprise-level security with role-based access control.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Infrastructure</h3>
                <p>Scalable cloud deployment with high availability systems.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔄</div>
                <h3>System Integration</h3>
                <p>Seamless integration with third-party APIs and legacy systems.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🧑‍💻</div>
                <h3>Dedicated Teams</h3>
                <p>Experienced developers dedicated to your enterprise projects.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     ENTERPRISE BENEFITS
========================= -->

<section class="why-choose">

    <div class="container">

        <div class="section-header">
            <span>BENEFITS</span>
            <h2>Why Enterprises Trust Us</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>⚡ High Performance</h3>
                <p>Optimized systems built for heavy traffic and complex workflows.</p>
            </div>

            <div class="why-card">
                <h3>🔒 Strong Security</h3>
                <p>Enterprise-grade security standards and data protection.</p>
            </div>

            <!-- <div class="why-card">
                <h3>📈 Scalable Systems</h3>
                <p>Architecture designed for long-term business growth.</p>
            </div> -->

            <div class="why-card">
                <h3>🧩 Custom Solutions</h3>
                <p>Tailored software built specifically for your business needs.</p>
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

            <h2>Build Enterprise-Grade Software</h2>
            <p>Let’s design and develop a powerful system for your business.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>