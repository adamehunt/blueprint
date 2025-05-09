<?php
// Changes underscores in uploaded filenames to hyphens using an anonymous function
add_filter('sanitize_file_name', function($filename) {
    // Replace underscores with hyphens
    $filename = str_replace('_', '-', $filename);
    return $filename;
}, 10);
?>
