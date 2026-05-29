<?php 
include __DIR__ . '/../header.php';
?>

<!-- =========================
     JOB APPLY HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                🧾 Job Application
            </span>

            <h1>
                Apply for Your <span>Dream Role</span>
            </h1>

            <p>
                Submit your application and join our development team. We review every application carefully.
            </p>

            <div class="hero-buttons">
                <a href="#apply-form" class="btn-primary">Apply Now</a>
                <a href="<?php echo BASE_URL ?>career" class="btn-secondary">View Openings</a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('job-apply.png', 'Job Apply'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     APPLY FORM
========================= -->

<section class="service-details" id="apply-form">

    <div class="container">

        <div class="section-header">
            <span>CAREERS</span>
            <h2>Job Application Form</h2>
            <p>Fill your details and upload your resume</p>
        </div>

        <div class="engagement-grid">

            <!-- FORM -->
            <div class="engagement-card">

                <h3>Apply Now</h3>
                <p>We will contact you after reviewing your profile</p>

                <form id="applyForm" action="" enctype="multipart/form-data">

                    <div style="display:flex; flex-direction:column; gap:15px; margin-top:20px;">

                        <input type="text" name="name" placeholder="Full Name" required
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                        <input type="email" name="email" placeholder="Email Address" required
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                        <input type="text" name="phone" placeholder="Phone Number" required
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">


                        <input type="text" name="experience" placeholder="Experience (e.g. 2 Years)"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                        <textarea name="message" rows="4" placeholder="Cover Letter"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;"></textarea>

                        <!-- RESUME -->
                        <input type="file" name="resume" required
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                            <div id="applyError" class="form-message error" style="display:none;"></div>

                            <div id="applySuccess" class="form-message success" style="display:none;">
                                Application submitted successfully. We will contact you soon.
                            </div>

                        <button type="submit" class="btn-primary">Submit Application</button>

                    </div>

                </form>

            </div>

            <!-- INFO -->
            <!-- INFO -->
        <div class="engagement-card important-notes-card">

            <h3>Important Notes</h3>

            <ul class="important-notes-list">

                <li>
                    Only shortlisted candidates will be contacted
                </li>

                <li>
                    Make sure your resume and portfolio are updated
                </li>

                <li>
                    Experience in real-world projects will be preferred
                </li>

                <li>
                    Strong communication and problem-solving skills are a plus
                </li>

                <li>
                    Mention your preferred technology stack clearly
                </li>

                <li>
                    Internship and freelance experience can also be included
                </li>

                <li>
                    Please upload resume in PDF or DOC format only
                </li>
                <li>Response time may vary depending on application volume</li>

                <li>Remote and hybrid opportunities may be available for selected roles</li>

            </ul>

            <div class="important-contact-box">

                <h4>
                    Email HR
                </h4>

                <p>
                    info@jogatek.com
                </p>

            </div>

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

            <h2>Join Our Team Today</h2>
            <p>Build real-world products and grow your career with us.</p>

            <a href="#apply-form" class="btn-primary">Apply Now</a>

        </div>

    </div>

</section>

<script>

document.addEventListener("DOMContentLoaded", function(){

    const form = document.getElementById("applyForm");

    const errorBox = document.getElementById("applyError");
    const successBox = document.getElementById("applySuccess");

    const submitBtn = form.querySelector("button[type='submit']");


    /* =========================
       FORM SUBMIT
    ========================= */

    form.addEventListener("submit", function(e){

        e.preventDefault();


        /* =========================
           GET VALUES
        ========================= */

        const name = form.querySelector("input[name='name']").value.trim();

        const email = form.querySelector("input[name='email']").value.trim();

        const phone = form.querySelector("input[name='phone']").value.trim();

        const experience = form.querySelector("input[name='experience']").value.trim();

        const message = form.querySelector("textarea[name='message']").value.trim();

        const resume = form.querySelector("input[name='resume']").files[0];


        /* =========================
           RESET MESSAGES
        ========================= */

        hideMessages();


        /* =========================
           VALIDATION
        ========================= */

        if(name === ""){

            return showError("Name is required");

        }

        if(email === "" || !validateEmail(email)){

            return showError("Valid email is required");

        }

        if(phone === "" || phone.length < 10){

            return showError("Valid phone number required");

        }

        if(experience === ""){

            return showError("Experience is required");

        }

        if(message.length < 10){

            return showError("Message must be at least 10 characters");

        }

        if(!resume){

            return showError("Please upload your resume");

        }


        /* =========================
           FILE VALIDATION
        ========================= */

        const allowedExtensions = [
            "pdf",
            "doc",
            "docx"
        ];

        const fileName = resume.name.toLowerCase();

        const fileExtension = fileName.split('.').pop();

        if(!allowedExtensions.includes(fileExtension)){

            return showError(
                "Only PDF, DOC, DOCX files allowed"
            );

        }

        if(resume.size > 5 * 1024 * 1024){

            return showError(
                "File size should be less than 5MB"
            );

        }


        /* =========================
           AJAX REQUEST
        ========================= */

        const formData = new FormData(form);

        submitBtn.disabled = true;

        submitBtn.innerText = "Submitting...";


        fetch(
            "<?php echo BASE_URL; ?>forms/apply-job-form.php",
            {
                method: "POST",
                body: formData
            }
        )

        .then(response => response.json())

        .then(data => {

            submitBtn.disabled = false;

            submitBtn.innerText = "Submit Application";


            if(data.status === "success"){

                successBox.style.display = "block";

                errorBox.style.display = "none";

                form.reset();

            }
            else{

                showError(
                    data.message || "Submission failed"
                );

            }

        })

        .catch(error => {

            submitBtn.disabled = false;

            submitBtn.innerText = "Submit Application";

            showError(
                "Server error. Please try again."
            );

        });

    });



    /* =========================
       HELPERS
    ========================= */

    function showError(message){

        errorBox.innerText = message;

        errorBox.style.display = "block";

        successBox.style.display = "none";

    }


    function hideMessages(){

        errorBox.style.display = "none";

        successBox.style.display = "none";

    }


    function validateEmail(email){

        const regex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        return regex.test(email);

    }

});

</script>

<?php include __DIR__ . '/../footer.php'; ?>