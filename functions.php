<?php

//create a menu
register_nav_menu( 'siteNavigation', 'Primary Navigation');

//add bootstrap navwalker
require get_template_directory() . '/bootstrap-navwalker.php';

?>