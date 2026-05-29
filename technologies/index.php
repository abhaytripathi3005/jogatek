<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     TECHNOLOGIES HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                ⚙️ Technologies
            </span>

            <h1>
                Modern <span>Tech Stack We Use</span>
            </h1>

            <p>
                We use scalable, secure, and high-performance technologies to build modern web and mobile applications
                that grow with your business.
            </p>

            <div class="hero-buttons">
                <a href="#stack" class="btn-primary">Explore Stack</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('technologies.png', 'Technologies Stack'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     TECH STACK
========================= -->

<section class="service-details" id="stack">

    <div class="container">

        <div class="section-header">
            <span>OUR STACK</span>
            <h2>Technologies We Work With</h2>
            <p>Reliable tools for scalable digital products</p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile Development</h3>
                <p>Flutter, React Native, Android (Java/Kotlin), iOS app development</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Frontend</h3>
                <p>HTML, CSS, JavaScript, jQuery, React, Next.js, Vue.js, Tailwind CSS</p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>Backend</h3>
                <p>PHP, Node.js, Python, Django, FastAPI and REST APIs</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🤖</div>
                <h3>AI & Automation</h3>
                <p>AI integrations, chatbots, workflow automation and smart systems</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🗄️</div>
                <h3>Database</h3>
                <p>MySQL, PostgreSQL, MongoDB, Firebase and scalable database systems</p>
            </div>

            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud & Hosting</h3>
                <p>AWS, Google Cloud, DigitalOcean, VPS hosting and cloud deployment</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>DevOps</h3>
                <p>CI/CD, Docker, Git, server management and deployment automation</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>UI/UX Design</h3>
                <p>Figma, responsive UI design and modern user experience development</p>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     APPROACH SECTION
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">
            <span>APPROACH</span>
            <h2>How We Choose Technology</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Requirement Analysis</h3>
                <p>Understanding project goals and scalability needs.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Tech Selection</h3>
                <p>Choosing best-fit stack for performance and cost.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Architecture Design</h3>
                <p>Building scalable and maintainable system structure.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Implementation</h3>
                <p>Clean coding with best industry practices.</p>
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

            <h2>Need a Scalable Tech Solution?</h2>
            <p>We build products using the right technology for long-term growth.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Let’s Build</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>