<?php

add_filter('sanitize_file_name', 'lowercase_filename', 10);

function lowercase_filename($filename) {
    $info = pathinfo($filename);
    $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
    $name = basename($filename, $ext);
    return strtolower($name) . $ext;
}
