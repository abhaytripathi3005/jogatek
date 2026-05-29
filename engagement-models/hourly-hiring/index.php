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
                ⏱️ Hourly Hiring
            </span>

            <h1>
                Pay Only for <span>Hours You Use</span>
            </h1>

            <p>
                Hire developers on an hourly basis for flexible work. Best for small tasks, urgent fixes,
                and short-term development needs without long commitments.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=hourly_hiring" class="btn-primary">Hire Now</a>
                <a href="#hourly-hiring-process" class="btn-secondary">How It Works</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('hourly-hiring.png', 'Hourly Hiring'); ?>
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
            <span>OVERVIEW</span>
            <h2>What is Hourly Hiring?</h2>
            <p>Flexible development based on actual time spent</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🧾</div>
                <h3>Pay as You Go</h3>
                <p>You are charged only for the actual development hours utilized.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Quick Tasks</h3>
                <p>Ideal for bug fixes, minor enhancements, and small feature updates.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔄</div>
                <h3>Flexible Scaling</h3>
                <p>Increase or reduce development hours anytime based on project needs.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Transparent Tracking</h3>
                <p>Detailed work reports and hour tracking provide complete transparency.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🛠️</div>
                <h3>Ongoing Support</h3>
                <p>Continuous technical assistance for updates, fixes, and improvements.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Fast Turnaround</h3>
                <p>Quick execution and faster delivery for time-sensitive requirements.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     PROCESS SECTION
========================= -->

<section class="process" id="hourly-hiring-process">

    <div class="container">

        <div class="section-header">
            <span>PROCESS</span>
            <h2>How Hourly Hiring Works</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Sharing</h3>
                <p>You share tasks, issues, features, or development requirements.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Time Estimation</h3>
                <p>We estimate the required development hours and execution plan.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Development Execution</h3>
                <p>Our team starts working on assigned tasks with regular progress updates.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Testing & Review</h3>
                <p>Completed work is tested and reviewed before final submission.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Delivery</h3>
                <p>Approved work and updates are delivered for deployment or usage.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Billing & Support</h3>
                <p>Invoices are generated based on utilized hours with continued support.</p>
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
            <h2>Why Choose Hourly Model</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>💰 Cost Efficient</h3>
                <p>No long-term commitment or unnecessary cost.</p>
            </div>

            <div class="why-card">
                <h3>⚡ Instant Support</h3>
                <p>Quick response for urgent development needs.</p>
            </div>

            <div class="why-card">
                <h3>🔧 Flexible Work</h3>
                <p>Ideal for ongoing small improvements and fixes.</p>
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

            <h2>Need Developers on Hourly Basis?</h2>
            <p>Get expert help only when you need it.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=hourly_hiring" class="btn-primary">Start Now</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>