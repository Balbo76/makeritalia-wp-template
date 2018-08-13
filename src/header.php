<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class("bg-light"); ?>>


        <div class="container">
            <div class="row d-none d-lg-block">
                <div class="col-md-12">
                    <a class="navbar-brand mr-auto mr-lg-0" href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ) . '/img/logo.png';  ?>" class="logo">
                    </a>
                </div>
            </div>
        </div>


    <nav id="mainNav" class="navbar navbar-expand-lg shadow-sm">
        <div class="container">

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
<?php

$theme_location = "header-menu";
if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
    $menu = get_term($locations[$theme_location], 'nav_menu');
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_list = "";
    $menu_list .= '<ul class="navbar-nav mr-auto">' . "\n";

    foreach ($menu_items as $menu_item) {
        if ($menu_item->menu_item_parent == 0) {

            $parent = $menu_item->ID;

            $menu_array = array();
            foreach ($menu_items as $submenu) {
                if ($submenu->menu_item_parent == $parent) {
                    $bool = true;
                    $menu_array[] = '<a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a>' . "\n";
                }
            }
            if ($bool == true && count($menu_array) > 0) {

                $menu_list .= '<li class="nav-item dropdown">' . "\n";
                $menu_list .= '<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' . "\n";

                $menu_list .= '<div class="dropdown-menu">' . "\n";
                $menu_list .= implode("\n", $menu_array);
                $menu_list .= '</div>' . "\n";

            } else {

                $menu_list .= '<li class="nav-item">' . "\n";
                $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
            }

        }

        // end <li>
        $menu_list .= '</li>' . "\n";
    }

    $menu_list .= '</ul>' . "\n";
    echo $menu_list;
}
?>
            </div>

            <button class="navbar-toggler p-0 border-0 text-right" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon border-white"></span>
            </button>

        </div>
    </nav>

    <div class="container">