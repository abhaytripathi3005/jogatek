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
                👨‍💻 Dedicated Developers
            </span>

            <h1>
                Hire <span>Skilled Dedicated Developers</span>
            </h1>

            <p>
                Get experienced developers who work exclusively on your project. Scale your team instantly
                without hiring overhead and build faster with expert resources.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=dedicated_developers" class="btn-primary">Hire Developers</a>
                <a href="#what-we-offer" class="btn-secondary">What We Offer</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('dedicated-developers.png', 'Dedicated Developers'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     SERVICE DETAILS
========================= -->

<section class="service-details" id="what-we-offer">

    <div class="container">

        <div class="section-header">
            <span>WHAT WE OFFER</span>
            <h2>Dedicated Developer Services</h2>
            <p>Flexible hiring models for your project needs</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>Full-Time Developers</h3>
                <p>Dedicated resources working only on your project.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile App Experts</h3>
                <p>Flutter, Android, and iOS specialists for app development.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Web Developers</h3>
                <p>Frontend and backend developers for scalable web systems.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🗄️</div>
                <h3>Backend Specialists</h3>
                <p>PHP, Node.js, Python and database development experts.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud & DevOps</h3>
                <p>AWS, server setup, deployment and CI/CD management.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Project-Based Teams</h3>
                <p>Complete team allocation based on project requirements.</p>
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
            <h2>How Hiring Works</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Sharing</h3>
                <p>Understand your project needs and skill requirements.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Developer Selection</h3>
                <p>We allocate the best-fit developers for your project.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Onboarding</h3>
                <p>Developers integrate with your workflow and tools.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Execution</h3>
                <p>Dedicated work with regular updates and reporting.</p>
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
            <h2>Why Hire From Us</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🚀 Faster Hiring</h3>
                <p>Get skilled developers without long recruitment delays.</p>
            </div>

            <div class="why-card">
                <h3>💰 Cost Efficient</h3>
                <p>Reduce hiring and infrastructure costs significantly.</p>
            </div>

            <div class="why-card">
                <h3>📈 Scalable Team</h3>
                <p>Easily scale team size based on project requirements.</p>
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

            <h2>Need Dedicated Developers?</h2>
            <p>Build your product faster with experienced development resources.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=dedicated_developers" class="btn-primary">Hire Now</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>