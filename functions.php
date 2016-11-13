<?php

add_filter('wpcf7_form_action_url', 'wpcf7_custom_form_action_url');

function wpcf7_custom_form_action_url($url) {
    global $post;
    $id_to_change = 7;
    if($post->ID === $id_to_change)
        return '/#thank-you';
    else
        return $url;
}



?>