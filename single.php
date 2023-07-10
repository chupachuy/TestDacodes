<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="container">
    <div class="event">
        <div class="main-title">
            <h1><?php the_title(); ?></h1>
            <div class="dates">
                <?php the_field('fecha_de_inicio'); ?><br>
                <?php the_field('fecha_de_fin'); ?>
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
 </div>
 <?php endwhile; ?>
<?php endif; ?>
</main>

<div class="separar"></div>

<?php get_footer(); ?>