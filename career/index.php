<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     CAREER HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                💼 Careers
            </span>

            <h1>
                Build Your <span>Career With Us</span>
            </h1>

            <p>
                Join our team and work on real-world products across web, mobile, and enterprise solutions.
                Grow your skills in a fast-paced development environment.
            </p>

            <div class="hero-buttons">
                <a href="#openings" class="btn-primary">View Openings</a>
                <a href="<?php echo BASE_URL ?>job-apply" class="btn-secondary">Apply Now</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('career.png', 'Careers'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     OPENINGS
========================= -->

<section class="service-details" id="openings">

    <div class="container">

        <div class="section-header">
            <span>OPPORTUNITIES</span>
            <h2>Current Openings</h2>
            <p>Join our growing development team</p>
        </div>

        <div class="jobs-grid">

            <!-- FLUTTER DEVELOPER -->
            <div class="job-card">
                <h3>Flutter Developer</h3>
                <p class="job-meta">Experience: 0–4 Years | Type: Full-Time | Location: Lucknow / Remote</p>
                <span class="job-deadline">⏳ Apply before: 10 June 2026</span>

                <h4>Salary</h4>
                <p>₹15,000 – ₹40,000 (Based on skills & experience)</p>

                <h4>Job Description</h4>
                <p>Build high-quality cross-platform mobile applications using Flutter.</p>

                <h4>Responsibilities</h4>
                <ul>
                    <li>Develop mobile apps using Flutter</li>
                    <li>Integrate APIs and backend services</li>
                    <li>Fix bugs and improve performance</li>
                    <li>Work with design & backend team</li>
                </ul>

                <h4>Required Skills</h4>
                <ul>
                    <li>Flutter & Dart</li>
                    <li>API integration</li>
                    <li>State management (Provider / Bloc)</li>
                    <li>UI understanding</li>
                </ul>

                <h4>Perks & Benefits</h4>
                <ul>
                    <li>Real project experience</li>
                    <li>Skill growth opportunities</li>
                    <li>Flexible environment</li>
                    <li>Career development</li>
                </ul>

                <a href="<?php echo BASE_URL ?>job-apply" class="apply-btn">Apply Now</a>
            </div>

            <!-- BACKEND DEVELOPER -->
            <div class="job-card">
                <h3>Backend Developer</h3>
                <p class="job-meta">Experience: 0–3 Years | Type: Full-Time | Location: Lucknow / Remote</p>
                <span class="job-deadline">⏳ Apply before: 10 June 2026</span>

                <h4>Salary</h4>
                <p>₹15,000 – ₹40,000 (Based on skills & experience)</p>

                <h4>Job Description</h4>
                <p>Develop scalable backend systems, APIs, and database architecture.</p>

                <h4>Responsibilities</h4>
                <ul>
                    <li>Build and maintain REST APIs</li>
                    <li>Database design and optimization</li>
                    <li>Server-side logic development</li>
                    <li>Security and performance improvements</li>
                </ul>

                <h4>Required Skills</h4>
                <ul>
                    <li>PHP / CodeIgniter / Node.js</li>
                    <li>MySQL / PostgreSQL</li>
                    <li>API development</li>
                    <li>Server basics</li>
                </ul>

                <h4>Perks & Benefits</h4>
                <ul>
                    <li>Work on live systems</li>
                    <li>Career growth</li>
                    <li>Learning opportunities</li>
                    <li>Team collaboration</li>
                </ul>

                <a href="<?php echo BASE_URL ?>job-apply" class="apply-btn">Apply Now</a>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     WHY JOIN US
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">
            <span>BENEFITS</span>
            <h2>Why Work With Us</h2>
        </div>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Real Projects</h3>
                <p>Work on live products used by real users.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>Skill Growth</h3>
                <p>Learn modern technologies and best practices.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Team Environment</h3>
                <p>Collaborate with experienced developers.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Career Growth</h3>
                <p>Opportunities to grow into senior roles.</p>
            </div>
            <div class="process-card">
                <div class="process-number">05</div>
                <h3>Flexible Work Culture</h3>
                <p>Supportive and growth-focused work environment.</p>
            </div>
            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Paid Leaves & Holidays</h3>
                <p>Enjoy company holidays and work-life balance support.</p>
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

            <h2>Want to Join Our Team?</h2>
            <p>Send your resume and start your journey with us.</p>

            <a href="<?php echo BASE_URL ?>job-apply" class="btn-primary">Apply Now</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>