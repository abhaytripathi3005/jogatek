<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     PRIVACY POLICY HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🔒 Privacy Policy
            </span>

            <h1>
                Your Data <span>Security Matters</span>
            </h1>

            <p>
                We are committed to protecting your personal information and ensuring transparency in how we use it.
            </p>

            <div class="hero-buttons">
                <a href="#policy" class="btn-primary">Read Policy</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('privacy-policy.png', 'Privacy Policy'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     PRIVACY CONTENT
========================= -->

<section class="service-details" id="policy">

    <div class="container">

        <div class="section-header">
            <span>LEGAL</span>
            <h2>Privacy Policy</h2>
            <p>Last updated: May 2026</p>
        </div>

        <div class="faq-wrapper">

            <div class="faq-item">
                <h3>1. Information We Collect</h3>
                <p>
                    We may collect name, email, phone number, and project details when you contact us or submit a form.
                </p>
            </div>

            <div class="faq-item">
                <h3>2. How We Use Information</h3>
                <p>
                    We use your information only to respond to inquiries, provide services, and improve user experience.
                </p>
            </div>

            <div class="faq-item">
                <h3>3. Data Protection</h3>
                <p>
                    We use standard security measures to protect your data from unauthorized access or misuse.
                </p>
            </div>

            <div class="faq-item">
                <h3>4. Data Sharing</h3>
                <p>
                    We do not sell or share your personal data with third parties except when required for service delivery.
                </p>
            </div>

            <div class="faq-item">
                <h3>5. Cookies</h3>
                <p>
                    Our website may use cookies to improve user experience and analyze website traffic.
                </p>
            </div>

            <div class="faq-item">
                <h3>6. Contact Us</h3>
                <p>
                    If you have any questions regarding privacy, you can contact us anytime through the contact page.
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

            <h2>Need More Information?</h2>
            <p>We are transparent about how we handle your data.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Contact Us</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>