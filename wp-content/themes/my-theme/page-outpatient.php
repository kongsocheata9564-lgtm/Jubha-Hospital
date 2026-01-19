<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/outpatient.css">


<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="http://jubha-hospital.test/" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">PATIENT INFORMATION</span>
        </div>
        <h1 class="page-title">OUTPATIENT</h1>
    </div>
</section>


<section class="outpatient-section">
    <div class="container">
        <div class="outpatient-row">
            
            <div class="outpatient-col text-col">
                <h2 class="outpatient-title">Outpatient</h2>
                <div class="outpatient-body">
                    <p>An In-Patient is a patient who is admitted to the hospital and stays for at least one night or longer for medical care. In-patients usually need continuous monitoring, treatment, or recovery after surgery.</p>
                    
                    <p>When a patient arrives at the hospital, the doctor first examines their condition. If the doctor decides that the patient needs close observation or long-term treatment, the patient will be admitted as an in-patient.</p>
                    
                    <p>Out-patient services are provided to patients who visit the hospital for medical consultation, diagnosis, or treatment without staying overnight. Our out-patient department is open every day from 8:00 AM to 5:00 PM, allowing patients to receive care at convenient hours. Patients register at the reception, wait for their turn, and then meet the doctor for examination. After the consultation, the doctor may give treatment, prescribe medicine, or schedule a follow-up visit. Out-patient care is important because it provides fast and effective medical services while allowing patients to return home the same day.</p>
                </div>
            </div>

            <div class="outpatient-col image-col">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/op1.jpg' ); ?>" alt="Director">
                </div>
            </div>
            
        </div>
    </div>
</section>


<section class="connect-subscribe">
    <div class="container">

        <!-- Left: Social Media -->
        <div class="connect">
            <h3>CONNECT WITH US</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-telegram-plane"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Right: Newsletter -->
        <div class="subscribe">
            <h3>SUBSCRIBE OUR NEWSLETTER</h3>
            <form class="subscribe-form" method="post">
                <input type="email" placeholder="Enter Your Email..." required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

    </div>
</section>

<?php get_footer(); ?>

