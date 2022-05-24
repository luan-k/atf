<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" id="slider-custom" data-anime="left">
        <?php echo do_shortcode('[ssslider id="99"]') ?>
    </section>

    <section class="marcas">
        <div class="slider-logos slider">
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/audi.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/chevrolet.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/citroen.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/fiat.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/ford.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/hyundai.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/Jac-motors.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/mitsubishi.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/nissan.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/peugeot.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/renault.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/seat.png')?>"></div>
            <div class="slide"><img src="<?php echo get_theme_file_uri('/images/marcas/vw.png')?>"></div>
        </div>
    </section>

    <section class="pagamentos mt-6  bg-black min-w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 container text-white rounded-2xl py-12">
            <div class="pagamentos__wrapper grid grid-cols-3 border-b-4 md:border-b-0 md:border-r-4 border-double border-white py-3 px-3">
                <i class="pagamentos__wrapper--icon fas fa-lock text-6xl m-auto" ></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl" data-anime="top">Pagamento cômodo e seguro</h2>
                    <h3 class="title-bland text-xl text-gray-300" data-anime="bottom">com Mercado Pago</h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-3 border-b-4 md:border-b-0 md:border-r-4 border-double border-white py-3 px-3">
                <i class="pagamentos__wrapper--icon far fa-credit-card text-6xl m-auto" ></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl" data-anime="top">Até 12 parcelas sem juros</h2>
                    <h3 class="title-bland text-xl text-gray-300" data-anime="bottom"><a href="">ver mais!</a> </h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-3 border-b-4 md:border-b-0 md:border-r-4 border-double border-white py-3 px-3">
                <i class="pagamentos__wrapper--icon fas fa-money-bill text-6xl m-auto" ></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl" data-anime="top">À vista no boleto bancário</h2>
                    <h3 class="title-bland text-xl text-gray-300" data-anime="bottom"><a href="">ver mais!</a> </h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-3 py-3 px-3">
                <i class="pagamentos__wrapper--icon fas fa-plus-circle text-6xl m-auto" ></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl" data-anime="top">Mais meios de pagamento</h2>
                    <h3 class="title-bland text-xl text-gray-300" data-anime="bottom"><a href="">ver mais!</a> </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="categorias container">
        <h2 class="title-2 text-6xl text-primary mb-6 mt-12 capitalize" data-anime="top">Compre por Categorias</h2>
        <div class="categorias__wrapper grid grid-cols-1 md:grid-cols-3 gap-4" >

                <a class="categorias__wrapper--eletrodomesticos" data-anime="left" href="<?php echo esc_url(site_url('/categoria-produto/filtros/')); ?>">                   
                    <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9"><span class="text-primary">FILTROS</span><br>MULTIMARCAS </h3>
                    <img class="categorias__wrapper--eletrodomesticos-img1" src="<?php echo get_theme_file_uri('/images/cat-1-front.png')?>" alt=""> 
                </a>

               <a class="categorias__wrapper--decoracao" href="<?php echo esc_url(site_url('/categoria-produto/fluido-de-cambio-automatico/')); ?>" data-anime="right">                   
                    <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9"><span class="text-primary">TRANSMISSÃO</span><br>AUTOMÁTICA</h3>    
                    <img class="categorias__wrapper--decoracao-img" src="<?php echo get_theme_file_uri('/images/cat-2-front.png')?>" alt="">           
                </a>

               <a class="categorias__wrapper--brinquedos" href="<?php echo esc_url(site_url('/categoria-produto/oleo-para-motores/')); ?>" data-anime="bottom">                   
                    <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9"><span class="text-primary">ÓLEO</span><br>PARA MOTORES</h3>                                               
                </a>
        </div>
    </section>

    <section class="recomendados py-16 container">
        <h2 class="title-2 text-6xl text-primary mb-16 mt-12" >Produtos Recomendados</h2>
        <div class=" grid grid-cols-1 md:grid-cols-4 gap-6" data-anime="right">
            <?php

            $produtosRecomendados = new WP_Query(array(
            'post_type' => array('product', 'product_variation'),
            'posts_per_page' => 8,
            'orderby' => 'date',
            'order' => 'ASC' ,
            'meta_query' => array(
                array(
                    'key'   => 'produto_recomendado',
                    'value' => '1',
                )
            ),
            ));

            while($produtosRecomendados->have_posts()){
                $produtosRecomendados->the_post();
                get_template_part('template-parts/content', 'card-products');
            } wp_reset_postdata();?>
        </div>
    </section>

    <section class="filter-ad mt-6 min-w-full bg-black py-9">
        <div class="grid grid-cols-1 md:grid-cols-6 container text-white">
            <div class="col-span-1 md:col-span-2"><img src="<?php echo get_theme_file_uri('/images/destaque.png')?>" alt=""></div>
            <div class="col-span-1 md:col-span-4 w-full flex flex-col align-middle content-center justify-center">
                <h2 class="title-2 text-5xl uppercase w-full mb-5 flex-end justify-end" >
                    <span class="text-primary text-5xl w-full mb-3">Filtros de transmissão the eagle</span>
                    <br>
                    <span class="text-5xl w-full font-light">
                        desempenho, qualidade e tecnologia
                    </span>
                </h2>
                <h3 class="uppercase text-3xl w-full">atende as principais montadoras do mercado, como: chevrolet, kia, volkswagen, fiat, jeep, honda, dodge, entre outras</h3>
                <a href="<?php echo esc_url(site_url('/produtos/filtros/florianopolis-sao-jose-palhoca-biguacu-santo-amaro/filtros-the-eagle/')); ?>" class="btn-wk uppercase bg-primary text-black block w-full md:w-1/4 py-4 px-12 text-2xl rounded-2xl text-center mt-4">Veja mais</a>
            </div>
        </div>
    </section>

     <!-- products -->
     <div id="promotional_slider">
        <h2 class="title-2 text-6xl text-primary mb-9" data-anime="top">Destaques</h2>
        <div class="promotionalslider_wrapper" data-anime="bottom">
         <?php

            $homepagePosts = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => 15,
            'orderby' => 'date',
            'order' => 'ASC' ,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
            ));

            while($homepagePosts->have_posts()){
                $homepagePosts->the_post(); 
                $price = get_post_meta( get_the_ID(), '_price', true );
                $product = wc_get_product( get_the_ID() ); ?>


                <div class="promotionalslider_single">
                    <a href="<?php the_permalink(); ?>" class="product-card__hyperlink-btn relative">
                        <div class="product-card" data-anime="bottom">
                                <div class="product-card__top-wraper">
                                    <div class="product-card__img-wraper">
                                        <img class="product-card__img-top" src="<?php the_post_thumbnail_url() ?>" alt="imagem produto">

                                    </div>
                                    <h4 class="product-card__title title-3 white px-3 md:px-9 mt-3 md:mt-6 text-left text-3xl"><?php echo wp_trim_words( get_the_title(), 4);  ?></h4>
                                </div>


                                <div class="product-card__body px-3 md:px-9 text-2xl">
                                    <p class="text-3xl mb-3 mt-1 font-bold">
                                        <?php
                                            if($price){

                                                if ( ! $product->is_type('variable') ){
                                                    $active_price  = $product->get_price();
                                                    $regular_price = $product->get_regular_price();

                                                    if ( $product->is_on_sale()) {
                                                        echo wc_price($active_price ) . ' <del class="text-primary text-lg font-bold"> ' . wc_price($regular_price) . '</del>' . '<div class="card-product__body--price-offer bg-primary rounded-full flex items-center justify-center"> OFERTA! </div>';
                                                    } else {
                                                        echo wc_price( $price );
                                                    }
                                                }
                                            } else {
                                                echo "Consulte";
                                            }
                                        ?>
                                    </p>
                                    <p class="product-card__text">
                                        <?php echo wp_trim_words( get_the_content(), 7);  ?>
                                    </p>

                                </div>



                                    <!-- <div class="btn-wk__alt btn-wk__alt--material-bubble bg-green-primary hover:bg-green-900">Ver mais</div> -->

                        </div>
                    </a>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>

    <!--     <section class="strip-contato w-full bg-dark-primary py-12 mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 container">
                <h3 class="title-2 text-white py-6 text-center md:text-left mb-5 md:mb-0" data-anime="left">Fale conosco!</h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-16">
                    <a href="https://api.whatsapp.com/send?phone=5548998311741" class="btn-wk whatsapp text-4xl text-white rounded-3xl flex items-center justify-center m-auto w-20 h-20 text-center" data-anime="left">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="tel:+5548998311741" class="btn-wk text-4xl text-white bg-primary rounded-3xl flex items-center justify-center m-auto w-20 h-20 text-center" data-anime="bottom">
                         <i class="fas fa-phone-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/rsvendasdigitais/" class="btn-wk instagram text-4xl text-white rounded-3xl flex items-center justify-center m-auto w-20 h-20 text-center" data-anime="back">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn-wk facebook text-4xl text-white rounded-3xl flex items-center justify-center m-auto w-20 h-20 text-center" data-anime="top">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                    <a href="<?php echo esc_url(site_url('/contato')); ?>" class="btn-wk text-4xl text-white col-span-2 md:col-span-1 bg-primary rounded-3xl flex items-center justify-center m-auto w-20 h-20 text-center" data-anime="right">
                        <i class="far fa-envelope"></i>
                    </a>
                    
                </div>
                
            </div>
        </section> -->

    

<?php 

get_footer(); ?>