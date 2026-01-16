<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">  

<?php get_header(); ?>

     <div class=" contact-us">
        <p> <span >Home </span>/ Contact Us</p>
        <h1> Contact Us</h1>
     </div>

     
    <section class="contact-section">
        <h1 class="contact-title">
            Contact Us
        </h1>
        <p class="contact-subtitle">
            We want you to feel comfortable asking us anything about your health
        </p>

        <div class="contact-list">
            <div class="contact-item">
            <div class="icon">
                <i class="fa-solid fa-phone"></i>
            </div>
            <h3>Customer Care</h3>
            <p>0887557692 / 0883422878</p>
            </div>

            
            <div class="contact-item">
            <div class="icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <h3>Head Office</h3>
            <p>#170ABC, Norodom Blvd,<br>Threa village, stung Meanchey, Meanchey , Phnom Penh </p>
            </div>

            <div class="contact-item">
            <div class="icon">
                <i class="fa-solid fa-comments"></i>
            </div>
            <h3>Chat With Us</h3>
            <p class="chat">
                <i class="fa-brands fa-whatsapp"></i> Whatsapp <br>
                <i class="fa-brands fa-telegram"></i> Telegram
            </p>
            </div>
            <div class="contact-item">
            <div class="icon">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <h3>Email Us</h3>
            <p>jubha hospital@gmail.com</p>
            </div>
        </div>
</section>



    <div class="contact-box">
    
        <div class="left-info">
            <div class="doctor-pic">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/images/Doctors Day Blog.jpg' ); ?>" alt="Director">


                </div>
        </div>

        <div class="right-form">
            <h2 class="main-title">We want to hear from you</h2>
            <p class="desc">Please fill out the form below to contact our team. We will respond as soon as possible. 
                Alternatively, phone or e-mail us using the information on the left.</p>

            <form class="contact-form">
                <label>Name </label>
                <input class="input" type="text" placeholder="Your Name">

                <div class="form-row">
                    <div class="half">
                        <label>Phone </label>
                        <input class="number" type="tel" placeholder="Mobile Number">
                    </div>
                    <div class="half">
                        <label>Email </label>
                        <input class="email" type="email" placeholder="Email Address">
                    </div>
                </div>

                <label>Subject</label>
                <input class="input" type="text">

                <label>Message</label>
                <textarea class="textarea" placeholder="Message"></textarea>

                <button class="btn-send">Send</button>
            </form>
        </div>
  
</div>

  <div class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31273.2101866894!2d104.8470770108398!3d11.541004200000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095183540eca35%3A0xbe81b4dcb0be7468!2sEcoDent%20Dental%20Clinic!5e0!3m2!1sen!2skh!4v1766717062822!5m2!1sen!2skh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          
  </div>

  <?php get_footer(); ?>
