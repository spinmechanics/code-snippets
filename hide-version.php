function remove_wp_version() {
     return '';
}

add_filter('the_generator', 'remove_wp_version');
