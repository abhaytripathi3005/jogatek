<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     TERMS HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                📄 Terms & Conditions
            </span>

            <h1>
                Website <span>Terms & Conditions</span>
            </h1>

            <p>
                Please read these terms carefully before using our services or website.
            </p>

            <div class="hero-buttons">
                <a href="#terms" class="btn-primary">Read Terms</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('terms.png', 'Terms & Conditions'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     TERMS CONTENT
========================= -->

<section class="service-details" id="terms">

    <div class="container">

        <div class="section-header">
            <span>LEGAL</span>
            <h2>Terms & Conditions</h2>
            <p>Last updated: May 2026</p>
        </div>

        <div class="faq-wrapper">

            <div class="faq-item">
                <h3>1. Acceptance of Terms</h3>
                <p>
                    By accessing this website or using our services, you agree to be bound by these Terms & Conditions.
                </p>
            </div>

            <div class="faq-item">
                <h3>2. Services</h3>
                <p>
                    We provide software development services including web, mobile, and enterprise solutions.
                    Service scope is defined in project agreements.
                </p>
            </div>

            <div class="faq-item">
                <h3>3. Payments</h3>
                <p>
                    Payments must be made as per agreed project milestones or contracts. Delayed payments may affect delivery timelines.
                </p>
            </div>

            <div class="faq-item">
                <h3>4. Intellectual Property</h3>
                <p>
                    All source code, designs, and assets remain our property until full payment is received unless otherwise agreed.
                </p>
            </div>

            <div class="faq-item">
                <h3>5. Project Delivery</h3>
                <p>
                    Timelines are estimated and may vary depending on project complexity and client feedback delays.
                </p>
            </div>

            <div class="faq-item">
                <h3>6. Limitation of Liability</h3>
                <p>
                    We are not responsible for any indirect or incidental damages arising from use of our services.
                </p>
            </div>

            <div class="faq-item">
                <h3>7. Termination</h3>
                <p>
                    We reserve the right to terminate services in case of misuse, breach of agreement, or non-payment.
                </p>
            </div>

            <div class="faq-item">
                <h3>8. Contact Information</h3>
                <p>
                    For any questions regarding these terms, please contact us through the Contact page.
                </p>
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

            <h2>Still Have Questions?</h2>
            <p>Let’s clarify everything before we start working together.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Contact Us</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>