<?php
http_response_code(404);
include __DIR__ . '/../header.php';
?>

<!-- =========================
     404 PAGE
========================= -->

<section class="hero error-page">

    <div class="container">

        <div class="error-wrapper">

            <!-- LEFT CONTENT -->
            <div class="error-content">

                <span class="hero-badge">
                    ⚠ Page Not Found
                </span>

                <h1>
                    404 <br>
                    <span>Oops!</span> This Page Is Missing
                </h1>

                <p>
                    The page you are looking for might have been removed,
                    renamed, or is temporarily unavailable.
                </p>

                <div class="hero-buttons">

                    <a href="<?php echo BASE_URL ?>" class="btn-primary">
                        Back To Home
                    </a>

                    <a href="<?php echo BASE_URL ?>contact-us" class="btn-secondary">
                        Contact Us
                    </a>

                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="error-image">

                <div class="error-card">

                    <?php picture_img('404-illustration.png', '404 Illustration'); ?>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include __DIR__ . '/../footer.php'; ?>