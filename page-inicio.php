<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>

<main>
    <div class="container">
            <h1>Home</h1>
            <hr>

            <?php

                $date_args = array(
                    'post_type'   => 'evento',
                    'meta_key' => 'fecha_de_inicio',
                    'posts_per_page' => -1,
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query'=> array(
                        array(
                        'key' => 'fecha_de_inicio',
                        'compare' => '>',
                        'value' => date("Y-m-d"),
                        'type' => 'DATE'
                        )
                    ),
                );
                $date_query = new WP_Query( $date_args ); 
            ?>

            <?php if (  $date_query->have_posts() ) : while (  $date_query->have_posts() ) : $date_query->the_post();; ?>
            <div class="event">
                <div class="main-title">
                    <h1><?php the_title(); ?></h1>
                    <div class="dates">
                        <p>Fecha inicio: <strong><?php the_field('fecha_de_inicio'); ?></strong></p>
                        <p>Fecha fin: <strong><?php the_field('fecha_de_fin'); ?>
                    </div>
                </div>

                <div class="content">
                    <?php the_content(); ?>
                </div>
                <div class="place">
                    <p>Continente: <strong><?php the_field( 'continente' ); ?></strong></p>
                    <p>País: <strong><?php the_field( 'pais' ); ?></strong></p>
                    <p>Estado: <strong><?php the_field( 'estado' ); ?></strong></p>
                </div>
                <?php $image = get_field('imagen_acf'); ?><br><br><br>
                <img src="<?php echo $image; ?>" alt="image" ><br>

            </div>
            
                <?php endwhile; else : ?>
                    <h2>Lo siento no hay eventos disponibles</h2>
                <?php endif; ?>
            
    </div>
</main>


<div class="separar"></div>
    

    
<?php get_footer(); ?>

