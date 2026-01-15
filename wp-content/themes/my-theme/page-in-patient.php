<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/in-patient.css">

<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="' . esc_url( http://jubha-hospital.test/ ) . '" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">PATIENT INFORMATION</span>
        </div>
        <h1 class="page-title">IN PATIENT</h1>
    </div>
</section>


<section class="inpatient-section">
    <div class="container">
        <div class="inpatient-grid">
            
            <aside class="inpatient-sidebar">
                <h2 class="sidebar-title">IN PATIENT</h2>
                <nav class="sidebar-nav">
                    <ul>
                        <li class="active"><a href="#">Rooms & Services</a></li>
                    </ul>
                </nav>
                
                <div class="sidebar-description">
                    <p>An In-Patient is a patient who is admitted to the hospital and stays for at least one night or longer for medical care. In-patients usually need continuous monitoring, treatment, or recovery after surgery.</p>
                    <p>When a patient arrives at the hospital, the doctor first examines their condition. If the doctor decides that the patient needs close observation or long-term treatment, the patient will be admitted as an in-patient.</p>
                    <p>In-patients receive full medical care, including:</p>
                    <ul class="care-list">
                        <li>24-hour nursing care</li>
                        <li>Regular doctor visits</li>
                        <li>Medication and treatment</li>
                        <li>Hospital room and meals</li>
                    </ul>
                </div>
            </aside>

            <main class="inpatient-content">
                <h1 class="content-title">Rooms & Services</h1>
                <p class="intro-text">At Jubha Hospital we are committed to provide quality care at the highest levels.</p>
                
                <div class="content-flex">
                    <div class="text-block">
                        <p>To ensure optimal patient experience and a convenient atmosphere for swift recovery, all our rooms are equipped with the latest advanced medical equipment and well trained medical staff along with the essential entertainment and comfort facilities needed by the patient.</p>
                        <p>Other than the regular shared and private rooms, luxurious VIP suites are also available at AGH Khobar and AGH Jubail for the most premium healthcare experience.</p>
                    </div>
                    <div class="image-block">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/hp1.jpg' ); ?>" alt="Director">
                    </div>
                </div>
            </main>

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
