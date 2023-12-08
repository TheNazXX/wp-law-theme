<!DOCTYPE HTML>
<html <?php language_attributes()?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head()?>
</head>

<body <?php body_class()?>>
  <?php wp_body_open()?>

  <div class="fh5co-loader"></div>

  <div id="page">
    <header class="header">
      <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
          <div class="container">
            <div class="row">
              <div class="col-xs-2">
                <div id="fh5co-logo"><a href="<?php echo home_url("/")?>"><?php bloginfo('name'); ?></a></div>
              </div>
              <div class="col-xs-10 text-right menu-1">

                <?php wp_nav_menu([
                  'theme_location' => 'header-menu',
                  'container' => false,
                  'walker' => new My_Custom_Walker_Menu()
                ]); ?>

              </div>
            </div>

          </div>
        </div>
      </nav>

      <?php echo get_search_form()?>
    </header>