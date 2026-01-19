<?php
/*
Plugin Name: appointment-book
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is a plugin for appointment booking.
Author: chheun nita
Version: 1.7.2
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action('admin_menu', 'appointment_book_menu');

function appointment_book_menu() {
    add_menu_page(
        'appointment-book',
        'appointment-book',
        'manage_options',
        'appointment-book',
        'hospital_dashboard',
        'dashicons-heart'
    );

    add_submenu_page(
        'appointment-book',
        'In Patient',
        'In Patient',
        'manage_options',
        'in-patient',
        'in_patient_page'
    );
}

function hospital_dashboard() {
    echo '<h1>Hospital </h1>';
}

function in_patient_page() {
    echo '<h1>In Patient Page</h1>';
    
}

