<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        body { background: #F7F7EE !important;
            font-family: 'Josefin Sans', sans-serif !important;
        }/* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        nav { background: #B6EB7A !important;}
        .footer { background: #B6EB7A !important;}
        .card { background: #D8EBB5 !important;}
        .btn { background: #FB7813 !important;}
        .btn-primary { background: #17706E !important;}
        .primary{background: #BBDFC8 !important;}
        ul { list-style: none !important;}
    </style>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" width="30" height="30" >
    <a class="navbar-brand" href="<?= home_url( '/' ) ?>">&nbsp;<?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <?php 
            wp_nav_menu( array(
                'theme_location'  => 'main_menu',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                // 'container'       => 'div',
                // 'container_class' => 'collapse navbar-collapse',
                // 'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
      <?php get_search_form( ); ?>
    </div>
  </div>
</nav>
    
</header>
    
