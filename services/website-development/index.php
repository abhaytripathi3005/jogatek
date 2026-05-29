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
                🌐 Website Development
            </span>

            <h1>
                Modern <span>High-Performance Websites</span>
            </h1>

            <p>
                We design and develop fast, secure, and scalable websites for startups, businesses, and enterprises.
                Our focus is clean UI, performance, and conversion-driven design.
            </p>

            <div class="hero-buttons">
                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development" class="btn-primary">Start Project</a>
                <a href="<?php echo BASE_URL ?>portfolio" class="btn-secondary">View Work</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('website-development.png', 'Website Development'); ?>
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
            <h2>Website Development Services</h2>
            <p>End-to-end web solutions for modern businesses</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Fast Websites</h3>
                <p>Optimized websites with lightning-fast loading speed.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Responsive Design</h3>
                <p>Perfect experience on mobile, tablet, and desktop devices.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔒</div>
                <h3>Secure Architecture</h3>
                <p>Secure coding practices to protect your business data.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>SEO Optimized</h3>
                <p>Built for better ranking and visibility on search engines.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Hosting & Deployment</h3>
                <p>Secure hosting setup, server deployment and domain configuration.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🛠️</div>
                <h3>Maintenance & Support</h3>
                <p>Regular updates, bug fixes and long-term technical support.</p>
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
            <h2>How We Build Websites</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Analysis</h3>
                <p>Understanding your business goals and website needs.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>UI/UX Design</h3>
                <p>Modern and conversion-focused interface design.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Development</h3>
                <p>Clean, scalable and high-performance coding.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Launch</h3>
                <p>Testing, optimization and live deployment.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>SEO Optimization</h3>
                <p>Optimizing website structure and performance for better search visibility.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Maintenance & Support</h3>
                <p>Regular updates, security monitoring and ongoing technical support.</p>
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
            <h2>Why Choose Our Web Team</h2>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <h3>🚀 High Performance</h3>
                <p>Fast-loading and optimized websites for better user experience.</p>
            </div>

            <div class="why-card">
                <h3>🎯 Business Focused</h3>
                <p>Designs that help increase leads and conversions.</p>
            </div>

            <div class="why-card">
                <h3>🔧 Scalable Code</h3>
                <p>Future-ready architecture that grows with your business.</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     WEBSITE PLANS CTA
========================= -->

<section class="service-details">

    <div class="container">

        <div class="cta-box">

            <span class="service-badge">
                💼 Website Plans
            </span>

            <h2>
                Need Website with Hosting & Domain?
            </h2>

            <p>
                Explore our affordable monthly website plans with hosting, domain,
                SSL, support and GST included.
            </p>

            <div class="hero-buttons" style="justify-content:center;margin-bottom:0;">

                <a href="<?php echo BASE_URL ?>website-plans" class="btn-primary">
                    View Website Plans
                </a>

                <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development" class="btn-secondary">
                    Custom Website Pricing
                </a>

            </div>

        </div>

    </div>

</section>

<!-- =========================
     CTA
========================= -->

<!-- <section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>Ready to Build Your Website?</h2>
            <p>Let’s create a powerful and modern website for your business.</p>

            <a href="<?php echo BASE_URL ?>contact-us?inquiry_type=web_development" class="btn-primary">Get Started</a>

        </div>

    </div>

</section> -->

<?php include __DIR__ . '/../../footer.php'; ?>