<?php
get_header();
?>

<main class="container my-5">
    <div class="row">
        <div class="col-lg-8 px-0">
            <h1 class="mt-5"><?php the_title() ?></h1>
            <p>
                <?php the_content() ?>
            </p>
        </div>
        
        <div class="last_posts col-2 border">
            <strong class="bg-success w-100 p-2">Laatste posts:</strong>
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby'   => 'date',
                'order'     => 'DESC',
            ];
            
            $post_query = new WP_Query($args);
            
            if ($post_query->have_posts()) {
                while ($post_query->have_posts()) {
                    $post_query->the_post();
                    ?>
                    <div class="col">
                        <h2><?php the_title(); ?></h2>
                        <?php the_date( 'Y-m-d h:i', '<em>', '</em>' ); ?>
                        <em><?php the_excerpt() ?></em>
                        <a href="<?php the_permalink() ?>" class="button">Lees meer</a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
