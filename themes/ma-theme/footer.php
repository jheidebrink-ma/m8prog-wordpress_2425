
<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container row">
        <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
            <?php dynamic_sidebar( 'footer_1' ); ?>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
            <?php dynamic_sidebar( 'footer_2' ); ?>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
            <?php dynamic_sidebar( 'footer_3' ); ?>
        <?php endif; ?>
    </div>

    <div class="container">
        <span class="text-body-secondary">&copy; <?php echo date('Y') ?> Mediacollege Amsterdam begrippenlijst Software Developer.</span>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>