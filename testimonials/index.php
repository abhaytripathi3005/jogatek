<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     TESTIMONIALS HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                ⭐ Testimonials
            </span>

            <h1>
                What Our <span>Clients Say</span>
            </h1>

            <p>
                Real feedback from clients who trusted us for building scalable web and mobile solutions.
            </p>

            <div class="hero-buttons">
                <a href="#reviews" class="btn-primary">View Reviews</a>
                <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">Contact Us</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('testimonials.png', 'Testimonials'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     TESTIMONIALS
========================= -->

<section class="testimonials" id="reviews">

    <div class="container">

        <div class="section-header">
            <span>REVIEWS</span>
            <h2>Client Feedback</h2>
            <p>Trusted by businesses across multiple domains</p>
        </div>

        <div class="testimonial-grid">

            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>
                    “Working with JogaTek was a great experience. Team was professional, responsive, and highly skilled. They delivered our solution that exceeded our expectations.”
                </p>

                <h4>
                    — GynoSakhi Co-Founder
                </h4>

            </div>



            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>
                    “Professional team with excellent communication and timely delivery. Highly recommended.”
                </p>

                <h4>
                    — Business Owner
                </h4>

            </div>



            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ⭐⭐⭐⭐⭐
                </div>

                <p>
                    “Their support and maintenance services are highly reliable. The team is responsive and always ready to help.”
                </p>

                <h4>
                    — Enterprise Client
                </h4>

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

            <h2>Ready to Work With Us?</h2>
            <p>Join our satisfied clients and build your next digital product.</p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">Start Project</a>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>