<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     INDUSTRIES HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🏢 Industries We Serve
            </span>

            <h1>
                Solutions for <span>Every Business Domain</span>
            </h1>

            <p>
                We build custom software solutions tailored for different industries, helping businesses digitize,
                automate, and scale efficiently.
            </p>

            <div class="hero-buttons">
                <a href="#industries" class="btn-primary">Explore Industries</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('industries.png', 'Industries We Serve'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     INDUSTRY LIST
========================= -->

<section class="service-details" id="industries">

    <div class="container">

        <div class="section-header">
            <span>INDUSTRIES</span>
            <h2>We Work Across Multiple Domains</h2>
            <p>Custom solutions designed for real business needs</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🏥</div>
                <h3>Healthcare</h3>
                <p>Hospital management, appointment systems, patient records</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏨</div>
                <h3>Hospitality</h3>
                <p>Hotel booking, club management, restaurant systems</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🛒</div>
                <h3>E-Commerce</h3>
                <p>Online stores, marketplaces, seller & delivery apps</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📚</div>
                <h3>Education</h3>
                <p>Learning platforms, LMS, tuition management systems</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏋️</div>
                <h3>Sports & Fitness</h3>
                <p>Club booking, sports scheduling, fitness apps</p>
            </div>

            <div class="service-card">
                <div class="service-icon">💼</div>
                <h3>Business & ERP</h3>
                <p>CRM, ERP, inventory and workflow automation systems</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     VALUE SECTION
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">
            <span>VALUE</span>
            <h2>What We Deliver Across Industries</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Automation</h3>
                <p>Reduce manual work with smart digital systems.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Efficiency</h3>
                <p>Improve business operations and productivity.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Scalability</h3>
                <p>Systems built to grow with your business.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Digital Transformation</h3>
                <p>Move from offline to fully digital workflows.</p>
            </div>
            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Security & Reliability</h3>
                <p>Secure and stable systems for long-term business operations.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Customer Experience</h3>
                <p>Modern digital experiences that improve customer engagement.</p>
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

            <h2>Want a Solution for Your Industry?</h2>
            <p>We build custom software tailored to your business domain.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Discuss Your Idea</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>