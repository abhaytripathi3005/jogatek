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
                🧩 Web Application Development
            </span>

            <h1>
                Powerful <span>Web Applications</span>
            </h1>

            <p>
                We build scalable, secure and high-performance web applications tailored for startups,
                enterprises and growing businesses using modern technologies.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_application" class="btn-primary">Start Project</a>
                <a href="<?php echo BASE_URL ?>portfolio" class="btn-secondary">View Work</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('web-app.png', 'Web Application Development'); ?>
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
            <span>WHAT WE BUILD</span>
            <h2>Web Application Development Services</h2>
            <p>Custom web apps designed for performance, scalability and automation</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>Custom Web Apps</h3>
                <p>Tailor-made web applications built for your business logic.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Admin Dashboards</h3>
                <p>Powerful dashboards for managing data, users and analytics.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔗</div>
                <h3>API Development</h3>
                <p>Secure and scalable REST APIs for mobile and web systems.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Integration</h3>
                <p>Deploy and scale applications using cloud infrastructure.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🗄️</div>
                <h3>Database Systems</h3>
                <p>MySQL, PostgreSQL, MongoDB and scalable database architecture.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Realtime Applications</h3>
                <p>Live chat, notifications and realtime data synchronization systems.</p>
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
            <h2>How We Build Web Applications</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Study</h3>
                <p>Understanding workflows, users and system needs.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>System Design</h3>
                <p>Architecture planning and database structure design.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Development</h3>
                <p>Clean, scalable and secure coding practices.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Testing & Deployment</h3>
                <p>Quality testing and smooth production deployment.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Performance Optimization</h3>
                <p>Optimizing speed, scalability and application performance.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Maintenance & Support</h3>
                <p>Regular updates, monitoring and long-term technical support.</p>
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
            <h2>Why Choose Our Web App Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🚀 Scalable Systems</h3>
                <p>Built to handle growth and high traffic load.</p>
            </div>

            <div class="why-card">
                <h3>🔒 Secure Architecture</h3>
                <p>Strong security practices for safe data handling.</p>
            </div>

            <div class="why-card">
                <h3>⚡ High Performance</h3>
                <p>Optimized backend and frontend for fast response.</p>
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

            <h2>Let’s Build Your Web App</h2>
            <p>Turn your idea into a powerful scalable web application.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_application" class="btn-primary">Get Started</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../../footer.php'; ?>