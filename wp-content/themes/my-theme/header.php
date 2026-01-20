<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<header class="main-header">


    <div class="top-bar">
        <div class="logo">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/jubha-logo2-removebg-preview.png' ); ?>" alt="Director">
        </div>
        </div>

        <div class="top-actions">
            <a href="<?php echo get_permalink(36); ?>" class="careers">Careers</a>

            <div class="btn">
            <a href="#" class="btn-appointment">
                <i class="fa-regular fa-calendar"></i>
                Book an Appointment
            </a>
            </div>

            <a href="#" class="user-icon">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
    </div>

    
    <nav class="navbar">
        <ul class="nav-menu">
            <li><a href="http://jubha-hospital.test/">Home</a></li>

                <li>
                    <a href="<?php echo get_permalink(15); ?>">Find A Doctor</a>
                    </li>

           

            <li class="dropdown">
                <a href="#">Patient Information <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo get_permalink(53); ?>">In Patient</a></li>
                    <li><a href="<?php echo get_permalink(49); ?>">Outpatient</a></li>
                    <li><a href="<?php echo get_permalink(30); ?>">Visitor Information</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">About Our Hospital <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo get_permalink(41); ?>">Our Story</a></li>
                    <li><a href="<?php echo get_permalink(47); ?>">News & Event</a></li>
                    <li><a href="<?php echo get_permalink(43); ?>">Jubha Shop</a></li>

                    
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">Specialties <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo get_permalink(68); ?>">Surgery</a></li>
                    <li><a href="<?php echo get_permalink(55); ?>">General Practice</a></li>
                    <li><a href="<?php echo get_permalink(45); ?>">Maternity</a></li>
                    <li><a href="<?php echo get_permalink(51); ?>">Padiatric</a></li>
                    <li><a href="<?php echo get_permalink(65); ?>">Child Wellness</a></li>
                    
                </ul>
            </li>
            <li><a href="<?php echo get_permalink(28); ?>">Contact Us</a></li>
            
           
        </ul>
    </nav>
</header>