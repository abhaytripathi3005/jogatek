<?php 
    include __DIR__ . '/../header.php';

    $selected_type = isset($_GET['inquiry_type'])
    ? $_GET['inquiry_type']
    : '';
?>

<!-- =========================
     CONTACT HERO
========================= -->

<section class="service-hero">

    <div class="container service-hero-wrapper">

        <div class="service-hero-left">

            <span class="service-badge">
                📞 Contact Us
            </span>

            <h1>
                Let’s <span>Build Something Great</span>
            </h1>

            <p>
                Have a project idea or need a custom software solution? Connect with our team and we’ll help you plan,
                design, and develop your product.
            </p>

            <div class="hero-buttons">
                <a href="#contact-form" class="btn-primary">Send Message</a>
                <a href="https://wa.me/917317855235" target="_blank" class="btn-secondary">
                    WhatsApp Us
                </a>
            </div>

        </div>

        <div class="service-hero-right">

            <div class="hero-image-card">
                <?php picture_img('contact.png', 'Contact Us'); ?>
            </div>

        </div>

    </div>

</section>

<!-- =========================
     CONTACT SECTION
========================= -->

<section class="service-details" id="contact-form">

    <div class="container">

        <div class="section-header">
            <span>GET IN TOUCH</span>
            <h2>We’d Love to Hear From You</h2>
            <p>Fill the form and our team will respond soon</p>
        </div>

        <div class="engagement-grid">

            <!-- CONTACT FORM -->
            <div class="engagement-card">

                <h3>Send a Message</h3>
                <p>Tell us about your project requirement</p>

                <form id="contactForm" method="post" enctype="multipart/form-data">

                    <div style="display:flex; flex-direction:column; gap:15px; margin-top:20px;">

                        <input type="text" name="name" placeholder="Your Name"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                        <input type="email" name="email" placeholder="Your Email"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                        <input type="text" name="phone" placeholder="Phone Number"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;">

                            <!-- CONTACT TYPE -->
                        <div class="form-group">
                            <select name="contact_type" required>
                                <option value="">Select Inquiry Type</option>

                                <option value="web_development" <?php echo ($selected_type=='web_development') ? 'selected' : ''; ?>>
                                    Website Development
                                </option>

                                <option value="mobile_app" <?php echo ($selected_type=='mobile_app') ? 'selected' : ''; ?>>
                                    Mobile App Development
                                </option>

                                <option value="web_application" <?php echo ($selected_type=='web_application') ? 'selected' : ''; ?>>
                                    Web Application Development
                                </option>

                                <option value="ui_ux" <?php echo ($selected_type=='ui_ux') ? 'selected' : ''; ?>>
                                    UI/UX Design
                                </option>

                                <option value="qa_testing" <?php echo ($selected_type=='qa_testing') ? 'selected' : ''; ?>>
                                    QA Testing & Automation
                                </option>

                                <option value="maintenance_support" <?php echo ($selected_type=='maintenance_support') ? 'selected' : ''; ?>>
                                    Maintenance & Support
                                </option>

                                <option value="dedicated_developers" <?php echo ($selected_type=='dedicated_developers') ? 'selected' : ''; ?>>
                                    Dedicated Developers
                                </option>

                                <option value="cloud_deployment" <?php echo ($selected_type=='cloud_deployment') ? 'selected' : ''; ?>>
                                    Cloud & Deployment
                                </option>

                                <option value="staff_augmentation" <?php echo ($selected_type=='staff_augmentation') ? 'selected' : ''; ?>>
                                    Staff Augmentation
                                </option>

                                <option value="fixed_cost" <?php echo ($selected_type=='fixed_cost') ? 'selected' : ''; ?>>
                                    Fixed Cost Project
                                </option>

                                <option value="hourly_hiring" <?php echo ($selected_type=='hourly_hiring') ? 'selected' : ''; ?>>
                                    Hourly Hiring
                                </option>

                                <option value="other" <?php echo ($selected_type=='other') ? 'selected' : ''; ?>>
                                    Other
                                </option>

                            </select>
                        </div>

                        <textarea name="message" rows="5" placeholder="Your Message"
                            style="padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.1);background:rgba(255,255,255,0.05);color:#fff;"></textarea>
                            <div id="formMessage" class="form-message"></div>
                        <button type="submit" class="btn-primary">Submit</button>

                    </div>

                </form>

            </div>

            <!-- CONTACT INFO -->
            <!-- CONTACT INFO -->
            <div class="engagement-card contact-info-card">

                <h3>Contact Information</h3>

                <ul class="contact-info-list">

                    <li>
                        <span>📍</span>
                        <div>
                            <strong>Location</strong>
                            <p>Lucknow, Uttar Pradesh, India</p>
                        </div>
                    </li>

                    <li>
                        <span>📧</span>
                        <div>
                            <strong>Email</strong>
                            <p>info@jogatek.com</p>
                        </div>
                    </li>

                    <li>
                        <span>📞</span>
                        <div>
                            <strong>Phone</strong>
                            <p>+91-7317855235</p>
                        </div>
                    </li>

                    <li>
                        <span>⏰</span>
                        <div>
                            <strong>Working Hours</strong>
                            <p>Mon - Sat (10 AM - 7 PM)</p>
                        </div>
                    </li>

                </ul>

                <div class="contact-support-box">

                    <h4>Quick Support</h4>

                    <p>
                        We usually respond within 24 hours for all project inquiries.
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

            <h2>Ready to Start Your Project?</h2>
            <p>Let’s discuss your idea and turn it into a scalable product.</p>

            <a href="#contact-form" class="btn-primary">Contact Now</a>

        </div>

    </div>

</section>

<script type="text/javascript">

    function showMessage(type, text){
      const box = document.getElementById("formMessage");
      box.className = "form-message " + type;
      box.innerText = text;
      box.style.display = "block";

      setTimeout(() => {
        box.style.display = "none";
      }, 4000);
    }

    document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();

  const form = this;

  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const phone = form.phone.value.trim();
  const contact_type = form.contact_type.value;
  const message = form.message.value.trim();

  const phonePattern = /^\+?[0-9]{10,15}$/;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if(!name || !email || !phone || !contact_type || !message){
    showMessage("error", "All fields are required.");
    return;
  }

  if(!emailPattern.test(email)){
    showMessage("error", "Invalid email format.");
    return;
  }

  if(!phonePattern.test(phone)){
    showMessage("error", "Invalid phone number.");
    return;
  }

  const formData = new FormData(form);

  const btn = form.querySelector("button[type='submit']");
  btn.disabled = true;
  btn.innerText = "Sending...";

  fetch("<?php echo BASE_URL; ?>forms/contact-form.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {

    btn.disabled = false;
    btn.innerText = "Submit";

    if(data.status === "success"){
      form.reset();
      showMessage("success", "Thank you! We will contact you shortly.");
    } else {
      showMessage("error", data.message || "Submission failed.");
    }

  })
  .catch(() => {
    btn.disabled = false;
    btn.innerText = "Submit";
    showMessage("error", "Server error. Please try again.");
  });

});
</script>
<?php include __DIR__ . '/../footer.php'; ?>
