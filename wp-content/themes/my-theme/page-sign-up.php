<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/sign-up.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="patient-signup-premium">

    <div class="premium-container">

        <!-- Left Premium Content -->
        <div class="premium-content">
            <span class="premium-badge">Private Care</span>
            <h2>Patient Registration</h2>
            <p>
                Experience seamless healthcare services with our secure patient portal.
                Register once and manage your medical journey with confidence.
            </p>

            <div class="premium-features">
                <div class="feature">
                    <i class="fa-solid fa-shield-heart"></i>
                    <div>
                        <h4>Secure Records</h4>
                        <span>Protected medical information</span>
                    </div>
                </div>

                <div class="feature">
                    <i class="fa-solid fa-user-doctor"></i>
                    <div>
                        <h4>Expert Doctors</h4>
                        <span>Specialists & consultants</span>
                    </div>
                </div>

                <div class="feature">
                    <i class="fa-solid fa-calendar-check"></i>
                    <div>
                        <h4>Smart Appointments</h4>
                        <span>Easy booking system</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Form -->
        <div class="premium-form">
            <h3>Create Your Account</h3>

            <form method="post">

                <div class="field">
                    <label>Full Name</label>
                    <div class="input">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="full_name" placeholder="Enter full name" required>
                    </div>
                </div>

                <div class="field">
                    <label>Email Address</label>
                    <div class="input">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="field">
                    <label>Phone Number</label>
                    <div class="input">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" name="phone" placeholder="Enter phone number">
                    </div>
                </div>

                <div class="field two">
                    <div>
                        <label>Password</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" required>
                        </div>
                    </div>

                    <div>
                        <label>Confirm Password</label>
                        <div class="input">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="confirm_password" required>
                        </div>
                    </div>
                </div>

                <button class="premium-btn">
                    Register Patient <i class="fa-solid fa-arrow-right"></i>
                </button>

            </form>
        </div>

    </div>

</section>
