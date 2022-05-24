<?php get_header();
?>
<div class="page-wraper contact relative">
    <div class="container contato-text mt-5 pt-5">
        <div class="row grid grid-cols-1 md:grid-cols-2">
            <div class="col-sm-6 ">
                <h3 data-anime="left">Telefone:</h3>
                <ul data-anime="left">
                    <li> (41) 99870-1315 </li>
                </ul>
                <img class="img-contato hidden md:block" src="<?php echo get_theme_file_uri('/images/contato.png')?>" alt="Fale Conosco!"> 
                                
            </div>
            <div class="col-sm-6 mt-9 md:mt-0" data-anime="right">
                <?php echo do_shortcode('[wpforms id="124"]') ?>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
</div>
<?php
    get_footer();
?>