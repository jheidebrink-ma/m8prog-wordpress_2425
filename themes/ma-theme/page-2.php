<?php
get_header();
?>

<main class="container my-5">
    <h1 class="mt-5"><?php the_title() ?></h1>
    <em>
        Dit is een special pagina voor mijn sample page met ID : 2 <br>
    </em>
    <div class="col-lg-8 px-0">
        <p>
            <?php the_content() ?>
        </p>
    </div>

</main>

<?php
get_footer();
