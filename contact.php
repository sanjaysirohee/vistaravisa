<?php
include('header.php');
?>
<style>
 .clean-breadcrumb {
    padding: 60px 0;
    background-size: cover;
    background-position: center;
}
.clean-breadcrumb h1 {
    color: #fff;
    font-weight: 700;
}
.clean-breadcrumb a,
.clean-breadcrumb span {
    color: #e0e0e0;
    font-size: 14px;
}
.contact-hero {
    background: #f7fafc;
}

.contact-hero .tag {
    font-size: 13px;
    letter-spacing: 1px;
    color: #1a73e8;
    font-weight: 600;
}

.contact-hero h2 {
    font-size: 36px;
    font-weight: 800;
    color: #0b2c4d;
}

.contact-points {
    list-style: none;
    padding: 0;
    margin-top: 20px;
}
.contact-points li {
    margin-bottom: 8px;
    color: #333;
}

.contact-form-card {
    background: #fff;
    padding: 40px;
    border-radius: 18px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.08);
}

.contact-form-card h4 {
    margin-bottom: 20px;
    font-weight: 700;
}

.contact-form-card input,
.contact-form-card select,
.contact-form-card textarea {
    width: 100%;
    margin-bottom: 15px;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #ddd;
    line-height: 35px;
}

.contact-form-card button {
    width: 100%;
    background: #1a73e8;
    color: #fff;
    padding: 14px;
    border-radius: 8px;
    font-weight: 600;
}

</style>

<main>
<section class="breadcrumb__area clean-breadcrumb" 
    style="background-image:url('assets/img/bg/1719421907_ac9bfbf247efc277cf2a.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Contact Us</h1>
            </div>
            <div class="col-lg-6 text-end">
                <a href="index.php">Home</a> / Contact Us
            </div>
        </div>
    </div>
</section>


<!-- ================= Contact Section ================= -->
<section class="contact-hero pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- LEFT CONTENT -->
            <div class="col-lg-5">
                <span class="tag">GET IN TOUCH</span>
                <h2>
                    Speak With<br>
                    <span class="text-theme">Visa Experts Today</span>
                </h2>
                <p class="mt-15">
                    Whether you’re planning to study, work, settle, or travel abroad,
                    our consultants will guide you with clarity, accuracy, and real experience.
                </p>

                <ul class="contact-points">
                    <li>✔ Transparent Process</li>
                    <li>✔ Country-Specific Guidance</li>
                    <li>✔ Fast Response Time</li>
                </ul>

                <div class="contact-direct mt-25">
                    <p><strong>Call:</strong> +91-7304552649</p>
                    <p><strong>Email:</strong> info@vistaravisa.in</p>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h4>Request a Call Back</h4>

                    <form method="POST" class="ajax-contact">
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="email" name="email" placeholder="Email Address">

                        <select name="subject">
                            <option selected disabled>Select Service</option>
                            <option>Student Visa</option>
                            <option>Work Permit</option>
                            <option>PR / Immigration</option>
                            <option>Tourist / Visitor Visa</option>
                        </select>

                        <textarea name="message" rows="4"
                            placeholder="Tell us about your requirement"></textarea>

                        <button type="submit">Get Expert Assistance</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================= Map ================= -->
<section class="contact-map">
<iframe
  src="https://www.google.com/maps?q=B-02,H-112,Sector%2063,Noida,UP&output=embed"
  width="100%" height="380" style="border:0;" loading="lazy">
</iframe>
</section>


</main>


<?php
include('footer.php');
?>