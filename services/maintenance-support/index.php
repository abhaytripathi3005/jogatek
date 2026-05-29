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
                🔧 Maintenance & Support
            </span>

            <h1>
                Reliable <span>Ongoing Application Support</span>
            </h1>

            <p>
                We provide continuous maintenance, updates, monitoring, and technical support to ensure your
                website and applications run smoothly without downtime or performance issues.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=maintenance_support" class="btn-primary">Get Support</a>
                <a href="<?php echo BASE_URL ?>portfolio" class="btn-secondary">View portfolio</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('maintenance-support.png', 'Maintenance & Support'); ?>
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
            <span>WHAT WE OFFER</span>
            <h2>Maintenance & Support Services</h2>
            <p>Complete care for your digital products</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🛠️</div>
                <h3>Bug Fixing</h3>
                <p>Quick resolution of issues and unexpected errors.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔄</div>
                <h3>Regular Updates</h3>
                <p>Feature upgrades and technology updates for stability.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Performance Monitoring</h3>
                <p>Continuous tracking of speed and system health.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Security Support</h3>
                <p>Security patches and protection against vulnerabilities.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Backup</h3>
                <p>Regular backups and recovery support to keep your data safe.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📞</div>
                <h3>Technical Support</h3>
                <p>Dedicated support for troubleshooting and ongoing assistance.</p>
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
            <h2>How We Support Your System</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>System Monitoring</h3>
                <p>Continuous monitoring of application health and uptime.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Issue Detection</h3>
                <p>Identifying bugs, errors, and performance bottlenecks.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Fix & Update</h3>
                <p>Applying fixes and improvements quickly and safely.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Ongoing Support</h3>
                <p>Continuous technical assistance and improvements.</p>
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
            <h2>Why Choose Our Support Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>⏱️ Quick Response</h3>
                <p>Fast resolution of critical issues and downtime problems.</p>
            </div>

            <div class="why-card">
                <h3>🔧 Technical Expertise</h3>
                <p>Experienced developers handling complex system issues.</p>
            </div>

            <div class="why-card">
                <h3>📈 Continuous Improvement</h3>
                <p>Regular enhancements for better performance and scalability.</p>
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

            <h2>Need Reliable Ongoing Support?</h2>
            <p>Let us handle maintenance while you focus on growing your business.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=maintenance_support" class="btn-primary">Get Support Plan</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>