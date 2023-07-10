<?php
/*
Template Name: Buscador
*/
?>

<?php get_header(); ?>

<main>
    <div class="container">
        <h1 class="text-center">BUSCADOR</h1>
        
        <h2></h2>

        <div class="selectores">
        <label for="country">Buscador de eventos:</label>
            <?php
            $args = array(
                'posts_per_page'    => '-1', 
                'orderby'           => 'title',
                'order'             => 'ASC',
                'post_type'         => 'evento',
            );
            $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
            ?>
            <select onchange="window.document.location.href=this.options[this.selectedIndex].value;">
                <option selected="selected">Selecciona un Evento</option>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <option value="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></option>
                <?php endwhile; ?>
            </select>
            <?php endif; wp_reset_postdata(); ?>
        </diV>

        <div class="separar"></div>



        <div class="selectores">
            <label for="country">Selecciona un continente:</label>
            <select name="continente" id="continente" class="select-css">
                <option value="">Selecciona...</option>
            </select>
            <br />
            <label for="countpaisry">Selecciona un país:</label>
            <select name="pais" id="pais" class="select-css">
                <option value="">Selseciona...</option>
            </select>
            <br />
            <label for="country">Selecciona una ciudad:</label>
            <select name="estado" id="estado" class="select-css">
                <option value="">Selecciona...</option>
            </select>
        </div>


    </div>
</main>

    


<?php get_footer(); ?>