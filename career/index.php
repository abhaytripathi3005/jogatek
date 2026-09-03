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

            <!-- MEDICAL REPRESENTATIVE / HEALTHCARE SALES -->
            <div class="job-card">
                <h3>Medical Representative (MR) – Healthcare Software Sales</h3>
                <p class="job-meta">Experience: 0–3 Years | Type: Full-Time | Location: Lucknow / Field Sales</p>
                <span class="job-deadline">⏳ Apply before: 30 October 2026</span>

                <h4>Salary</h4>
                <p>₹15,000 – ₹35,000 + High Sales Incentives & Travel Allowance</p>

                <h4>Job Description</h4>
                <p>Sell healthcare software solutions (TekSathi Healthcare, GynoSakhi, Clinic & Hospital Management Systems, Telehealth Portals) to clinics, hospitals, diagnostic centers, and doctors.</p>

                <h4>Responsibilities</h4>
                <ul>
                    <li>Visit doctors, clinics, and hospitals to pitch healthcare software solutions</li>
                    <li>Generate leads, deliver product demos, and close sales with healthcare providers</li>
                    <li>Build long-term professional relationships with doctors and clinic owners</li>
                    <li>Meet monthly sales targets and provide client feedback to the product team</li>
                </ul>

                <h4>Required Skills</h4>
                <ul>
                    <li>Background in Medical Representative (MR) or Healthcare Field Sales</li>
                    <li>Strong communication, pitching, and negotiation skills</li>
                    <li>Field sales experience & doctor networking in target locations</li>
                    <li>Basic understanding of healthcare software solutions and CRMs</li>
                </ul>

                <h4>Perks & Benefits</h4>
                <ul>
                    <li>Attractive commission & sales incentives</li>
                    <li>Travel & mobile expense allowances</li>
                    <li>Fast-track career growth in HealthTech</li>
                    <li>Supportive sales & product training</li>
                </ul>

                <a href="<?php echo BASE_URL ?>job-apply" class="apply-btn">Apply Now</a>
            </div>

            <!-- IT SALES EXECUTIVE / BDE -->
            <div class="job-card">
                <h3>IT Sales Executive / Business Development Executive (BDE)</h3>
                <p class="job-meta">Experience: 0–3 Years | Type: Full-Time | Location: Lucknow / Remote / Hybrid</p>
                <span class="job-deadline">⏳ Apply before: 30 October 2026</span>

                <h4>Salary</h4>
                <p>₹15,000 – ₹40,000 + Performance Incentives</p>

                <h4>Job Description</h4>
                <p>Drive business growth by acquiring clients for website development, mobile apps, custom web applications, SaaS platforms, and enterprise software solutions.</p>

                <h4>Responsibilities</h4>
                <ul>
                    <li>Identify business leads and prospective clients for IT services & software products</li>
                    <li>Conduct client meetings, present technical proposals, and negotiate deal closures</li>
                    <li>Understand client project requirements and coordinate with software development team</li>
                    <li>Maintain client relationship and oversee post-sale onboarding & renewals</li>
                </ul>

                <h4>Required Skills</h4>
                <ul>
                    <li>Experience or strong interest in IT Sales / BDE / B2B Software Sales</li>
                    <li>Excellent communication, presentation, and closing skills</li>
                    <li>Lead generation capability via LinkedIn, cold outreach, and business networks</li>
                    <li>Basic knowledge of web technologies, mobile apps, and IT service models</li>
                </ul>

                <h4>Perks & Benefits</h4>
                <ul>
                    <li>Lucrative incentive structure on deal closures</li>
                    <li>Real corporate B2B sales experience</li>
                    <li>Opportunities to advance to BDE Lead / Sales Manager</li>
                    <li>Dynamic, collaborative work culture</li>
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