<?php
/*
Plugin Name: Book Appointment
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Cheata
Version: 1.0.0
License: ISO 9001 2008
*/

add_action('admin_menu', 'hospital_menu');

function hospital_menu() {
    add_menu_page(
        'Book Appointment',
        'Book Appointment',
        'manage_options',
        'hospital',
        'hospital_dashboard',
        'dashicons-heart'
    );

    add_submenu_page(
        'hospital',
        'In Patient',
        'In Patient',
        'manage_options',
        'in-patient',
        'in_patient_page'
    );
}

function hospital_dashboard() {
    echo '<h1>Hospital</h1>';
}

function in_patient_page() {
    echo '<h1>In Patient</h1>';
    
}




