<?php get_header(); ?>
<main class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else : ?>
    <p>Pagina niet gevonden.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
