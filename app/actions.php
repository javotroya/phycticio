<?php
namespace App;

add_action('init', function(){
    show_admin_bar(false);
}, 10, 3);
