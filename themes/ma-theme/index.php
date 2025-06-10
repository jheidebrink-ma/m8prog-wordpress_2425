<?php
get_header();
?>

<main class="container my-5">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <div class="col-lg-8 px-0">
        <p>
            <?php the_content() ?>
        </p>
    </div>


    <div class="last_posts row">
        <h2>Laatste posts:</h2>
        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby'   => 'date',
            'order'     => 'ASC',
        ];

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
        ?>
                <div class="col">
                    <h2><?php the_title(); ?></h2>
                    <em><?php the_excerpt() ?></em>
                </div>
        <?php
            }
        }
        ?>
    </div>
</main>

<?php
get_footer();
