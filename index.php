<?php get_header(); ?>
<body>
    <h1>Dacodes</h1>

    <?php
        $the_query = new WP_Query( array(
        'post_type' => 'evento',
        'order' => 'ASC'
        ));
        ?>
     
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php the_date('Y-m-d');?><br />
        <?php the_title(); ?><br />
        <?php the_content(); ?><br/>
        <?php the_field('fecha_de_inicio'); ?><br>
        <?php the_field( 'continente' ); ?><br>
        <?php the_field( 'pais' ); ?><br>
        <?php the_field( 'estado' ); ?><br>
        <?php $image = get_field('imagen_acf'); ?><br><br><br>
        <img src="<?php echo $image; ?>" alt="image" ><br>
    <?php endwhile; ?>

</body>
<?php get_footer(); ?>