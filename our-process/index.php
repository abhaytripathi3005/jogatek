<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     OUR PROCESS HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                ⚙️ Our Process
            </span>

            <h1>
                How We Deliver <span>High-Quality Projects</span>
            </h1>

            <p>
                We follow a structured development process to ensure clarity, quality, and on-time delivery for every project.
            </p>

            <div class="hero-buttons">
                <a href="#process" class="btn-primary">View Process</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('process.png', 'Our Process'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     PROCESS STEPS
========================= -->

<section class="process" id="process">

    <div class="container">

        <div class="section-header">
            <span>WORKFLOW</span>
            <h2>Step-by-Step Development Process</h2>
            <p>Clear execution from idea to deployment</p>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Gathering</h3>
                <p>We understand your business goals, requirements, and expectations in detail.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Planning & Strategy</h3>
                <p>We define architecture, tech stack, timelines, and execution plan.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>UI/UX Design</h3>
                <p>We create modern, user-friendly and conversion-focused designs.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Development</h3>
                <p>We build scalable and high-performance web and mobile applications.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Testing & QA</h3>
                <p>We test functionality, performance, and security before launch.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Deployment & Support</h3>
                <p>We deploy the project and provide ongoing maintenance and support.</p>
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

            <h2>Let’s Build Your Project</h2>
            <p>Follow a proven process to turn your idea into a scalable product.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Start Now</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>