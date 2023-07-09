<?php get_header(); ?>

<?php

        $date_now = date('Y-m-d');
        echo 'El dia de hoy es '. $date_now;

        $the_query = new WP_Query( array(
        'posts_per_page'	=> -1,
        'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'post_type' => 'evento',
        'order' => 'ASC',
        'meta_query' => array(
            array(
              'key' => 'event_date',
              'value' => $date_now,
              'type' => 'DATE',
              'compare' => '>=',
            )
        ),
        ));
        ?>
    
        <?php if (  $the_query->have_posts() ) : while (  $the_query->have_posts() ) : $the_query->the_post();; ?>
            <?php the_date('Y-m-d');?><br />
            <?php the_title(); ?><br />
            <?php the_content(); ?><br/>
            <?php the_field('fecha_de_inicio'); ?><br>
            <?php the_field( 'continente' ); ?><br>
            <?php the_field( 'pais' ); ?><br>
            <?php the_field( 'estado' ); ?><br>
            <?php $image = get_field('imagen_acf'); ?><br><br><br>
            <img src="<?php echo $image; ?>" alt="image" ><br>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>