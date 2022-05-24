<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper" >
        <header id="header">
            <nav>
                <div class=" bg-transparent max-w-full">
                    <div class=" h-20 bg-black w-full" data-anime="right"></div>
                    <div class="max-w mx-auto container ">
                        <div class="flex justify-between py-6">

                            <!-- logo -->
                            <div class="logo-wrapper w-40">
                                <a class="" href="<?php echo esc_url(site_url()); ?>">
                                    <img class="logo" src="<?php echo get_theme_file_uri('/images/logo.png')?>" alt="">
                                </a>
                            </div>

                            <!-- primary nav -->
                            <div class="icon-nav flex items-center text-2xl space-x-4">
                                <!-- <a target="_blank" class="py-5 px-3 text-black" href="tel:4830333277" ><i class="text-black fas fa-phone-alt text-5xl"></i></a> -->
                                <a target="_blank" class="py-5 px-3 text-black" href="https://www.facebook.com//"><i class="text-black text-5xl fab fa-facebook-f"></i></a>
                                <!-- <a target="_blank" class="py-5 px-3 text-black" href="<?php echo esc_url(site_url('/contato')); ?>"><i class="text-black text-5xl far fa-envelope"></i></a> -->
                                <a target="_blank" href="tel:5541998701315" class="py-5 px-3 text-black"><i class="text-black fab fa-instagram text-5xl"></i></i></a>
                                <!-- <a target="_blank" href="#" class="py-5 px-3 text-black"><i class="text-black fab fa-twitter text-5xl"></i></a>                            
                                <a target="_blank" href="#" class="py-5 px-3 text-black"><i class="text-black fab fa-youtube text-5xl"></i></a> -->
                                <a target="_blank" class="py-5 px-3 text-black flex flex-row align-middle justify-center items-center" href="https://web.whatsapp.com/send?phone=5541998701315&text=Ol%C3%A1!%20vim%20do%20Atf%20Parts.%20Estava%20olhando%20a%20p%C3%A1gina%20In%C3%ADcio.%20Pode%20me%20ajudar%3F"><i class="text-black fab fa-whatsapp text-5xl"></i>
                                    <div class=" col-span-2 ml-5 uppercase">
                                        compre pelo <br> <span class="w-full text-3xl">whatsapp</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-transparent max-w-full text-3xl bg-black space-x-12 font-medium min-w-full menu-mob" id="navbarNavAltMarkup">
                    <ul class="container relative flex items-center  ">
                        <!-- <li class="custom-menu-link ">
                            <a >Mais Categorias</a>
                            <?php
                        
                                wp_nav_menu( array(
                                    'theme_location'    => 'fancy_lab_main_menu',
                                    'container'         => 'div',
                                    'container_class'   => 'menu-container',
                                    /* 'container_id'      => 'bs-example-navbar-collapse-1', */
                                    'menu_class'        => 'nav navbar-nav',
                                ) );
                            ?>
                        </li> -->
                        <li class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" py-5 px-6">Início </a></li>
                        <li class="btn-nav <?php if (is_page('quem-somos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/quem-somos')); ?>" class=" py-5 px-6">Quem Somos </a></li>
                        <li class="btn-nav <?php if (is_page('produtos') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/produtos')); ?>" class=" py-5 px-6">Produtos </a></li>
                        <li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" py-5 px-6">Contato </a></li>
                        <li class="wrapper">
                            <a >
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger nav-item nav-link"><i class="fa fa-search text-white" aria-hidden="true"></i></a>
                    </ul>
                </div>
                
            </nav>
        </header>