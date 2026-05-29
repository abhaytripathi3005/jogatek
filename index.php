<?php 
  include 'header.php';
?>
<!-- =========================
     HERO SECTION
========================= -->

<section class="hero">

    <div class="hero-blur blur-one"></div>

    <div class="hero-blur blur-two"></div>


    <div class="container hero-wrapper">



        <!-- LEFT -->

        <div class="hero-left">

            <div class="hero-badge">

                🚀 Premium Software Development Company

            </div>



            <h1>

                We Build
                <span>
                    Digital Products
                </span>

                That Grow Businesses

            </h1>



            <p>

                Jogaapp Technologies helps startups
                and enterprises build scalable mobile apps,
                websites, enterprise software,
                cloud platforms and modern digital solutions.

            </p>



            <div class="hero-buttons">

                <a href="<?php echo BASE_URL ?>contact-us"
                   class="btn-primary">

                    Get Started

                </a>



                <a href="<?php echo BASE_URL ?>services"
                   class="btn-secondary">

                    Explore Services

                </a>

            </div>
        </div>





        <!-- RIGHT -->

        <div class="hero-right">

            <div class="hero-image-card">

                <?php picture_img('hero.png', 'Jogaapp Technologies'); ?>

            </div>
            <!-- STATS -->

            <div class="hero-stats">

                <div class="hero-stat-box">

                    <h3>
                        50+
                    </h3>

                    <span>
                        Projects
                    </span>

                </div>



                <div class="hero-stat-box">

                    <h3>
                        6+
                    </h3>

                    <span>
                        Years Experience
                    </span>

                </div>



                <div class="hero-stat-box">

                    <h3>
                        24/7
                    </h3>

                    <span>
                        Support
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="trusted">

    <div class="container">

        <div class="trusted-wrapper">

            <span>TECHNOLOGIES & SOLUTIONS WE WORK WITH</span>

            <div class="trusted-slider-wrapper">

                <button class="trusted-arrow left" onclick="scrollTrusted(-300)">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="trusted-grid" id="trustedGrid">

                    <div class="trusted-item">
                        <i class="fab fa-flutter"></i>
                        <span>Flutter</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-react"></i>
                        <span>React</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fas fa-code"></i>
                        <span>Next.js</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-node-js"></i>
                        <span>Node.js</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-php"></i>
                        <span>PHP</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-python"></i>
                        <span>Python</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fas fa-robot"></i>
                        <span>AI Integration</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp CRM</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fas fa-fire"></i>
                        <span>Firebase</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fab fa-aws"></i>
                        <span>AWS</span>
                    </div>

                    <div class="trusted-item">
                        <i class="fas fa-database"></i>
                        <span>MySQL</span>
                    </div>

                </div>

                <button class="trusted-arrow right" onclick="scrollTrusted(300)">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

            <p class="trusted-text">
                We work with modern technologies and also build custom solutions
                like WhatsApp CRM, automation systems, dashboards, booking platforms,
                and scalable business software. We continuously adapt to emerging
                technologies to build future-ready digital products.
            </p>

            <div class="section-read-more">
                <a href="<?php echo BASE_URL ?>technologies#stack" class="btn-secondary">Read More</a>
            </div>

        </div>

    </div>

</section>





<!-- =========================
     SERVICES
========================= -->

<section class="services">

    <div class="container">

        <div class="section-header">

            <span>
                OUR SERVICES
            </span>

            <h2>

                End-To-End
                IT Solutions

            </h2>

            <p>

                We provide complete software development
                and business technology solutions.

            </p>

        </div>



        <div class="service-grid">



            <div class="service-card service-card-action">

                <div class="service-icon">
                    📱
                </div>

                <h3>
                    Mobile App Development
                </h3>

                <p>
                    Android and iOS app development
                    using Flutter and modern frameworks.
                </p>

                <a href="<?php echo BASE_URL ?>services/mobile-app" class="btn-secondary">Know More</a>

            </div>





            <div class="service-card service-card-action">

                <div class="service-icon">
                    💻
                </div>

                <h3>
                    Website Development
                </h3>

                <p>
                    Premium responsive websites
                    for startups and enterprises.
                </p>

                <a href="<?php echo BASE_URL ?>services/website-development" class="btn-secondary">Know More</a>

            </div>





            <div class="service-card service-card-action">

                <div class="service-icon">
                    ⚙️
                </div>

                <h3>
                    Web Applications
                </h3>

                <p>
                    Dashboards, admin panels,
                    ERP systems and portals.
                </p>

                <a href="<?php echo BASE_URL ?>services/web-applications" class="btn-secondary">Know More</a>

            </div>





            <div class="service-card service-card-action">

                <div class="service-icon">
                    🧪
                </div>

                <h3>
                    Testing & QA
                </h3>

                <p>
                    Manual testing and software
                    quality assurance solutions.
                </p>

                <a href="<?php echo BASE_URL ?>services/qa-testing-automation" class="btn-secondary">Know More</a>

            </div>





            <div class="service-card service-card-action">

                <div class="service-icon">
                    ☁️
                </div>

                <h3>
                    Cloud & Deployment
                </h3>

                <p>
                    Server deployment,
                    hosting and cloud setup.
                </p>

                <a href="<?php echo BASE_URL ?>services/cloud-deployment" class="btn-secondary">Know More</a>

            </div>





            <!-- <div class="service-card service-card-action">

                <div class="service-icon">
                    👨‍💻
                </div>

                <h3>
                    Dedicated Resources
                </h3>

                <p>
                    Hire remote developers,
                    testers and dedicated teams.
                </p>

                <a href="<?php //echo BASE_URL ?>services/dedicated-developers" class="btn-secondary">Know More</a>

            </div> -->

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>services#services" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>

<!-- =========================
     ENGAGEMENT MODELS
========================= -->

<section class="engagement-models">

    <div class="container">

        <div class="section-header">

            <span>
                OUR ENGAGEMENT MODELS
            </span>

            <h2>
                Flexible Hiring Models
            </h2>

            <p>
                Choose the right engagement model
                according to your business needs.
            </p>

        </div>



        <div class="engagement-grid">

            <div class="engagement-card">

                <div class="engagement-icon">
                    📦
                </div>

                <h3>
                    Fixed Cost Project
                </h3>

                <p>
                    Complete end-to-end
                    project delivery
                    with fixed pricing.
                </p>

            </div>

            <div class="engagement-card">

                <div class="engagement-icon">
                    ⏱️
                </div>

                <h3>
                    Hourly Basis
                </h3>

                <p>
                    Flexible hourly engagement
                    for maintenance,
                    updates and support.
                </p>

            </div>

            <div class="engagement-card">

                <div class="engagement-icon">
                    👨‍💻
                </div>

                <h3>
                    Dedicated Team
                </h3>

                <p>
                    Hire full-time developers,
                    testers and designers
                    for long-term projects.
                </p>

            </div>
        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>engagement-models#models" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>

<!-- =========================
     PROCESS SECTION
========================= -->

<section class="process">

    <div class="container">

        <div class="section-header">

            <span>
                OUR PROCESS
            </span>

            <h2>
                How We Work
            </h2>

            <p>
                Our streamlined development process
                ensures quality and timely delivery.
            </p>

        </div>



        <div class="process-grid">

            <div class="process-card">

                <div class="process-number">
                    01
                </div>

                <h3>
                    Requirement Analysis
                </h3>

                <p>
                    Understanding business goals
                    and project requirements.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    02
                </div>

                <h3>
                    UI/UX & Planning
                </h3>

                <p>
                    Creating modern user experiences
                    and project architecture.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    03
                </div>

                <h3>
                    Development
                </h3>

                <p>
                    Building scalable
                    and high-performance solutions.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    04
                </div>

                <h3>
                    Testing & Launch
                </h3>

                <p>
                    Complete QA testing
                    and production deployment.
                </p>

            </div>

            <div class="process-card">

                <div class="process-number">
                    05
                </div>

                <h3>
                    Support & Maintenance
                </h3>

                <p>
                    Continuous monitoring, updates,
                    bug fixes and long-term support.
                </p>
            </div>

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>our-process#process" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>


<!-- =========================
     PORTFOLIO SECTION
========================= -->

<section class="portfolio">

    <div class="container">

        <div class="section-header">

            <span>
                OUR PORTFOLIO
            </span>

            <h2>
                Featured Projects
            </h2>

            <p>
                Some of the products
                and platforms we worked on.
            </p>

        </div>



        <div class="portfolio-grid">

            <div class="portfolio-card">
                <?php picture_img('gynosakhi.png', 'GynoSakhi AI Maternity Care Platform'); ?>

                <div class="portfolio-content">
                    <h3 class="portfolio-title">
                        <img src="<?php echo BASE_URL; ?>assets/images/GynoSakhi-logo.png"
                             alt="GynoSakhi Logo"
                             class="portfolio-logo">

                        <span>GynoSakhi</span>
                    </h3>

                    <p>
                        AI and IoT-powered maternity care platform supporting mothers throughout their 9-month pregnancy journey with real-time health monitoring, AI guidance, telehealth consultations, and wellness support across Android, iOS, and Web platforms.
                    </p>

                    <a href="https://gynosakhi.com/" target="_blank" class="btn-secondary" style="margin-top:18px;">
                        Visit Website
                    </a>
                </div>
            </div>

            <div class="portfolio-card">
                <?php picture_img('wellness.png', 'TekSathi Spa and Salon Management Software'); ?>

                <div class="portfolio-content">
                    <h3 class="portfolio-title">
                        <img src="<?php echo BASE_URL; ?>assets/images/teksathi-logo.png"
                             alt="TekSathi Logo"
                             class="portfolio-logo">

                        <span>TekSathi Spa & Salon</span>
                    </h3>

                    <p>
                        Spa and salon management platform with Android, iOS, and Web applications for appointments, memberships, staff scheduling, packages, and customer management.
                    </p>

                    <a href="https://teksathi.com/" target="_blank" class="btn-secondary" style="margin-top:18px;">
                        Visit Website
                    </a>
                </div>
            </div>


            <div class="portfolio-card">
                <?php picture_img('clubs.png', 'TekSathi Club Management Software'); ?>

                <div class="portfolio-content">
                    <h3 class="portfolio-title">
                        <img src="<?php echo BASE_URL; ?>assets/images/teksathi-logo.png"
                             alt="TekSathi Logo"
                             class="portfolio-logo">

                        <span>TekSathi Club Management</span>
                    </h3>

                    <p>
                        Complete club management ecosystem with Android, iOS, and Web applications for memberships, facility bookings, sessions, payments, events, and member engagement.
                    </p>

                    <a href="https://teksathi.com/" target="_blank" class="btn-secondary" style="margin-top:18px;">
                        Visit Website
                    </a>
                </div>
            </div>

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>portfolio#cases" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>

<!-- =========================
     WHY CHOOSE US
========================= -->

<section class="why-choose">

    <div class="container">

        <div class="section-header">

            <span>
                WHY CHOOSE US
            </span>

            <h2>
                Why Businesses Choose JogaTek
            </h2>

        </div>



        <div class="why-grid">

            <div class="why-card">

                <h3>
                    ⚡ Fast Delivery
                </h3>

                <p>
                    Agile development process
                    for faster project delivery.
                </p>

            </div>



            <div class="why-card">

                <h3>
                    🔒 Secure Architecture
                </h3>

                <p>
                    Secure and scalable
                    enterprise-grade solutions.
                </p>

            </div>



            <!-- <div class="why-card">

                <h3>
                    🎨 Premium Design
                </h3>

                <p>
                    Modern UI/UX with premium
                    visual experience.
                </p>

            </div> -->



            <div class="why-card">

                <h3>
                    🛠️ Long-Term Support
                </h3>

                <p>
                    Dedicated maintenance
                    and technical support.
                </p>

            </div>

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>why-choose-us#reasons" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>


<!-- =========================
     TESTIMONIALS
========================= -->

<section class="testimonials">

    <div class="container">

        <div class="section-header">

            <span>
                CLIENT FEEDBACK
            </span>

            <h2>
                What Clients Say
            </h2>

        </div>



        <div class="testimonial-grid">

            <div class="testimonial-card">

                <p>
                    “Working with JogaTek was a great experience. Team was professional, responsive, and highly skilled. They delivered our solution that exceeded our expectations.”
                </p>

                <h4>
                    — GynoSakhi Co-Founder
                </h4>

            </div>



            <div class="testimonial-card">

                <p>
                    “Professional team with excellent communication and timely delivery. Highly recommended.”
                </p>

                <h4>
                    — Business Owner
                </h4>

            </div>



            <div class="testimonial-card">

                <p>
                    “Their support and maintenance services are highly reliable. The team is responsive and always ready to help.”
                </p>

                <h4>
                    — Enterprise Client
                </h4>

            </div>

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>testimonials#reviews" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>

<!-- =========================
     FAQ SECTION
========================= -->

<section class="faq">

    <div class="container">

        <div class="section-header">

            <span>
                FAQs
            </span>

            <h2>
                Frequently Asked Questions
            </h2>

        </div>



        <div class="faq-wrapper">

            <div class="faq-item">

                <h3>
                    Do you provide maintenance support?
                </h3>

                <p>
                    Yes, we provide long-term
                    support and maintenance services.
                </p>

            </div>



            <div class="faq-item">

                <h3>
                    Which technologies do you use?
                </h3>

                <p>
                    Flutter, PHP, Laravel,
                    React, MySQL and cloud technologies.
                </p>

            </div>



            <div class="faq-item">

                <h3>
                    Can you provide dedicated developers?
                </h3>

                <p>
                    Yes, we provide remote developers,
                    testers and dedicated teams.
                </p>

            </div>

        </div>

        <div class="section-read-more">
            <a href="<?php echo BASE_URL ?>faq#faq" class="btn-secondary">Read More</a>
        </div>

    </div>

</section>




<!-- =========================
     ABOUT SECTION
========================= -->

<section class="about">

    <div class="container about-wrapper">



        <div class="about-left">

            <?php picture_img('about-jogatek.png', 'About Jogaapp'); ?>

        </div>




        <div class="about-right">

            <span class="about-tag">

                ABOUT COMPANY

            </span>



            <h2>

                We Create
                Powerful Digital Experiences

            </h2>



            <p>

                Jogaapp Technologies Pvt. Ltd.
                is focused on building scalable,
                secure and high-quality software products
                for modern businesses.

            </p>



            <div class="about-points">

                <div class="about-point">

                    ✅ Experienced Team

                </div>



                <div class="about-point">

                    ✅ Premium UI/UX Design

                </div>



                <div class="about-point">

                    ✅ Long-Term Support

                </div>



                <div class="about-point">

                    ✅ Scalable Architecture

                </div>

            </div>



            <a href="<?php echo BASE_URL ?>about-us"
               class="btn-primary">

                Read More

            </a>

        </div>

    </div>

</section>

<!-- =========================
     CTA SECTION
========================= -->

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>
                Have An Idea? <br>
                Let's Build It Together.
            </h2>

            <p>
                Start your next software project with Jogaapp Technologies.
            </p>

            <a href="<?php echo BASE_URL ?>contact-us" class="btn-primary">
                Contact Us
            </a>

        </div>

    </div>

</section>

<?php 
  include 'footer.php';
?>


<script>

$(document).ready(function(){

    $('.hero-left').css({
        opacity:'0',
        transform:'translateY(40px)'
    });

    $('.hero-right').css({
        opacity:'0',
        transform:'translateY(40px)'
    });

    setTimeout(function(){

        $('.hero-left').css({
            opacity:'1',
            transform:'translateY(0)',
            transition:'1s'
        });

        $('.hero-right').css({
            opacity:'1',
            transform:'translateY(0)',
            transition:'1.2s'
        });

    },200);

});

</script>

<script>

$(document).ready(function(){

    // $('.mobile-menu-btn').click(function(){

    //     $('.nav-links').toggleClass('active');

    // });

});

</script>

<script>

function scrollTrusted(value){

    document
    .getElementById('trustedGrid')
    .scrollBy({
        left:value,
        behavior:'smooth'
    });

}

</script>