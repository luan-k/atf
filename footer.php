
            
            <footer class="page-footer bg-black text-light-primary py-20" data-anime="bottom">
                
                <!-- Footer Links -->
                <div class="container text-center md:text-left text-lg">

                    <div class="grid grid-cols-1 md:grid-cols-3 col-g gap-6">

                        <div class="col-12 col-sm-4">
                            <h4 class="title-bland text-2xl mb-6 ">
                                central de atendimento
                            </h4>

                            <p class="footer-text">
                                <i class="fab fa-whatsapp"></i> (48) 99831-1741
                            </p>
                            <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">
                                <i class="far fa-envelope"></i> Enviar uma mensagem
                            </a>
                            
                        </div>
                       
                        <div class="col-12 col-sm-4">
                            <h4 class="title-bland text-2xl mb-6">
                                a empresa
                            </h4>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/categoria-produto/eletrodometicos/')); ?>"> Eletrodomésticos </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/categoria-produto/decoracao-casa-e-cozinha/')); ?>">Decoração/casa e cozinha</a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/categoria-produto/brinquedos-e-hobbies/')); ?>"> Brinquedos e Hobbies </a>
                            </div>
                            
                            
                        </div>
                        <div class="col-12 col-sm-4">
                            <h4 class="title-bland text-2xl mb-6">
                                Produtos
                            </h4>
                            <?php
                                 $footerPosts = new WP_Query(array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 9,
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

                                while($footerPosts->have_posts()){
                                $footerPosts->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                           
                        </div>

                    </div>
                       


            
            </footer>
            <!-- Footer -->
            
            <?php wp_footer() ?>

        </div>
    </body>
</html>