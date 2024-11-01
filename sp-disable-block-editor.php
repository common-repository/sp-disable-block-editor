<?php
/*
Plugin Name: Disable Gutenberg (SP Disable Block Editor)
Plugin URI: https://cms3.ru/kak-otklyuchit-gutenberg/
Description: SP Disable Block Editor is a WordPress plugin which can disable Gutenberg Editor
Version: 1.0.0
Text Domain: spdg86
Domain Path: /languages
Author: spoot1986
Author URI: https://cms3.ru/
*/

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_page', '__return_false', 10);

?>