<?php
/*
Plugin Name: appointment-booking
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is a plugin for appointment booking.
Author: chheun nita
Version: 1.7.2
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action('admin_menu', 'appointment_booking_menu');

function appointment_booking_menu() {
    add_menu_page(
        'Appointment Page',          
        'Appointment',               
        'manage_options',            
        'appointment-booking',       
        'appointment_booking_page',  
        'dashicons-calendar-alt',    
        20
    );
}

function appointment_booking_page() {
    echo '<h1>Appointment Booking Plugin</h1>';
    echo '<p>My Plugin<p>';
}