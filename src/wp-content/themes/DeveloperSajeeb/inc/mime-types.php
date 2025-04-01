<?php
// Image Formats
function enable_custom_mime_types($mimes) {
    $mimes['webp'] = 'image/webp';
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
add_filter('upload_mimes', 'enable_custom_mime_types');