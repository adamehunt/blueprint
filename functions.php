<?php

/**
 * Load custom functions from the custom-functions directory.
 * The directory is located within the child theme.
 */

// Define the path to the custom functions directory within the child theme.
$custom_functions_dir = get_stylesheet_directory() . '/custom-functions/';

// Check if the directory exists before trying to glob files.
if (is_dir($custom_functions_dir)) {
    // Loop through all .php files in the directory and include them.
    foreach (glob($custom_functions_dir . '*.php') as $filename) {
        require_once $filename;
    }
}

// Add other custom functions for your child theme below or above this block.

?>
