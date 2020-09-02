<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <!--Top Bar Start-->
    <section class="topBar d-none d-sm-block" style="border: 2px solid #4c4c4c;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--Search Widget-->
					<form role="search" method="get" action="<?php home_url(); ?>">
						<div>
							<label class="screen-reader-text" for="s"></label>
							<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Seatch this website">
							<input type="submit" id="searchsubmit" class="searchBtn" value="Search">
						</div>
					</form>
                </div>
                <div class="right-align col-md-6">
                    <!--Login form-->
                    <form action="" class="login">
                        <input type="text" placeholder="Username..." class="uname">
                        <input type="text" placeholder="Password..." class="uname">
                        <input type="submit" value="LOG IN" class="loginBtn">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Bar End -->

    <!-- Banner Area Start  -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- Logo  -->
                <div class="com-md-3">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>"><img src="http://localhost/dark3cuber/wp-content/uploads/2020/08/logo.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="banner-image d-none d-md-block">
                        <p>468 x 60px</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Menu  -->

        <nav class="navbar navbar-expand-lg">
            <div class="container"  style="background: black;padding: 10px 0px;">
                <button type="button" class="navbar-toggler" data-target="#myMenuToggler" data-toggle="collapse"><span class="fas fa-bars"></span></button>
                <div class="collapse navbar-collapse" id="myMenuToggler">
                    <?php
						$args = array(
							'theme_location' => 'primary',
							'menu_class' => 'navbar-nav',
							'menu_id' => 'topMenu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'          => 5,
							'fallback_cb'    => false,
							'walker'         => new Bootstrap_Menu_Walker()
						);
						 class Bootstrap_Menu_Walker extends Walker_Nav_Menu {

					function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

					  if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
						$t = '';
						$n = '';
					  } else {
						$t = "\t";
						$n = "\n";
					  }
					  $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

					  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
					  $classes[] = 'menu-item-' . $item->ID;

					  // Filters the arguments for a single nav menu item
					  $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

					  // Filters the CSS class(es) applied to a menu item's list item element
					  $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
					  $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

					  // Filters the ID applied to a menu item's list item element
					  $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
					  $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

					  $output .= $indent . '<li' . $id . $class_names .'>';

					  // it would be better to enter the class in Appearance -> Menus -> Screen Options -> CSS classes
					  // $output .= $indent . '<li' . $id . $class_names .'>';
					  $output .= $indent . '<li class="nav-item">';

					  $atts = array();
					  $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
					  $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
					  $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
					  $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

					  // Filters the HTML attributes applied to a menu item's anchor element
					  $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

					  $attributes = '';
					  foreach ( $atts as $attr => $value ) {
						if ( ! empty( $value ) ) {
						  $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
						  $attributes .= ' ' . $attr . '="' . $value . '"';
						}
					  }
					  $title = apply_filters( 'the_title', $item->title, $item->ID );

					  // Filters a menu item's title
					  $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

					  $item_output = $args->before;
					  $item_output .= '<a class="nav-link js-scroll-trigger"'. $attributes .'>';
					  $item_output .= $args->link_before . $title . $args->link_after;
					  $item_output .= '</a>';
					  $item_output .= $args->after;

					  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
					}
				  }
						wp_nav_menu($args);
					?>
                </div>	
            </div>
        </nav>	
    </section>