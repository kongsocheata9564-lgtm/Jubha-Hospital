<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="patient-login-premium">

    <div class="login-container">

        <!-- Left Info -->
        <div class="login-info">
            <span class="login-badge">Secure Access</span>
            <h2>Patient Login</h2>
            <p>Access your appointments, medical records, and doctor consultations securely anytime, anywhere.</p>

            <div class="login-features">
                <div class="feature">
                    <i class="fa-solid fa-shield-heart"></i>
                    <div>
                        <h4>Protected Data</h4>
                        <span>Your medical records are safe</span>
                    </div>
                </div>

                <div class="feature">
                    <i class="fa-solid fa-calendar-check"></i>
                    <div>
                        <h4>Appointments</h4>
                        <span>View and manage schedules</span>
                    </div>
                </div>

                <div class="feature">
                    <i class="fa-solid fa-user-doctor"></i>
                    <div>
                        <h4>Expert Doctors</h4>
                        <span>Access consultations anytime</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Login Form -->
        <div class="login-form">
            <h3>Sign in to Your Account</h3>

            <form method="post">

                <div class="field">
                    <label>Email Address</label>
                    <div class="input">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="field">
                    <label>Password</label>
                    <div class="input">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </div>
                </div>

                <button class="login-btn">
                    Login <i class="fa-solid fa-arrow-right"></i>
                </button>

                <span class="login-note">
                    Don't have an account? <a href="' . esc_url( http://jubha-hospital.test/sign-up/ ) . '">Register here</a>
                </span>

            </form>
        </div>

    </div>

</section>