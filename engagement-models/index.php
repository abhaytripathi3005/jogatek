<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     ENGAGEMENT MODELS HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🤝 Engagement Models
            </span>

            <h1>
                Flexible <span>Hiring & Delivery Models</span>
            </h1>

            <p>
                Choose the right engagement model based on your project size, budget, and flexibility needs.
                We offer scalable options for startups, enterprises, and long-term product development.
            </p>

            <div class="hero-buttons">
                <a href="#compare-model" class="btn-primary">Compare Models</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('engagement-models.png', 'Engagement Models'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     MODELS SECTION
========================= -->

<section class="service-details" id="models">

    <div class="container">

        <div class="section-header">
            <span>OUR MODELS</span>
            <h2>Choose Your Engagement Model</h2>
            <p>Flexible options designed for every business need</p>
        </div>

        <div class="engagement-grid engagement-models-grid">

            <div class="engagement-card">
                <div class="engagement-icon">👨‍💻</div>
                <h3>Dedicated Team Model</h3>
                <p>Hire a full dedicated team working exclusively on your project.</p>
                <a href="<?php echo BASE_URL ?>engagement-models/dedicated-team" class="btn-secondary">Learn More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">💰</div>
                <h3>Fixed Cost Projects</h3>
                <p>Defined scope, fixed budget, and clear delivery timeline.</p>
                <a href="<?php echo BASE_URL ?>engagement-models/fixed-cost" class="btn-secondary">Learn More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">⏱️</div>
                <h3>Hourly Hiring</h3>
                <p>Pay only for the hours you need. Best for small tasks.</p>
                <a href="<?php echo BASE_URL ?>engagement-models/hourly-hiring" class="btn-secondary">Learn More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">🧩</div>
                <h3>Staff Augmentation</h3>
                <p>Extend your existing team with skilled developers.</p>
                <a href="<?php echo BASE_URL ?>engagement-models/staff-augmentation" class="btn-secondary">Learn More</a>
            </div>

            <div class="engagement-card">
                <div class="engagement-icon">🔧</div>
                <h3>Maintenance Contracts</h3>
                <p>Ongoing support, updates, and system maintenance services.</p>
                <a href="<?php echo BASE_URL ?>engagement-models/maintenance-contracts" class="btn-secondary">Learn More</a>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     COMPARISON SECTION
========================= -->

<section class="process" id="compare-model">

    <div class="container">

        <div class="section-header">
            <span>COMPARE</span>
            <h2>Which Model is Right for You?</h2>
            <p>Choose the best engagement model based on your business needs.</p>
        </div>

        <div class="comparison-table-wrapper">

            <table class="comparison-table">

                <thead>

                    <tr>
                        <th>Requirement</th>
                        <th>Recommended Model</th>
                        <th>Best For</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Long-Term Product Development</td>
                        <td>Dedicated Team Model</td>
                        <td>Startups & SaaS Products</td>
                    </tr>

                    <tr>
                        <td>Fixed Scope & Budget</td>
                        <td>Fixed Cost Projects</td>
                        <td>Businesses with clear requirements</td>
                    </tr>

                    <tr>
                        <td>Small Tasks / Urgent Work</td>
                        <td>Hourly Hiring</td>
                        <td>Quick updates & support</td>
                    </tr>

                    <tr>
                        <td>Expand Existing Team</td>
                        <td>Staff Augmentation</td>
                        <td>Growing tech teams</td>
                    </tr>

                    <tr>
                        <td>Ongoing Maintenance</td>
                        <td>Maintenance Contracts</td>
                        <td>Long-term support & updates</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</section>

<!-- =========================
     CTA
========================= -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>Still Confused About the Right Model?</h2>
            <p>We can help you choose the best engagement model for your project.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Talk to Us</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>