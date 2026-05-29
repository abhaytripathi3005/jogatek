<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     WHY CHOOSE US HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                ⭐ Why Choose Us
            </span>

            <h1>
                Trusted Partner for <span>Digital Growth</span>
            </h1>

            <p>
                We build scalable, secure, and high-performance digital products that help businesses grow faster and operate efficiently.
            </p>

            <div class="hero-buttons">
                <a href="#reasons" class="btn-primary">Explore Reasons</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('why-choose-us.png', 'Why Choose Us'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     REASONS
========================= -->

<section class="service-details" id="reasons">

    <div class="container">

        <div class="section-header">
            <span>ADVANTAGES</span>
            <h2>Why Clients Trust Us</h2>
            <p>We focus on quality, performance, and long-term partnership</p>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🚀 High Performance Solutions</h3>
                <p>We build fast, optimized and scalable applications for real-world usage.</p>
            </div>

            <div class="why-card">
                <h3>🔒 Secure Architecture</h3>
                <p>Strong security practices to protect your data and business logic.</p>
            </div>

            <div class="why-card">
                <h3>📱 Modern UI/UX</h3>
                <p>Clean and conversion-focused designs that improve user engagement.</p>
            </div>

            <div class="why-card">
                <h3>⚙️ Scalable Systems</h3>
                <p>Architecture designed to grow with your business needs.</p>
            </div>

            <div class="why-card">
                <h3>👨‍💻 Experienced Team</h3>
                <p>Skilled developers with real industry experience in multiple domains.</p>
            </div>

            <div class="why-card">
                <h3>⏱️ On-Time Delivery</h3>
                <p>We follow structured processes to deliver projects on schedule.</p>
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

            <h2>Ready to Work With Us?</h2>
            <p>Let’s build something powerful for your business together.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>