<?php get_header();?>

<!-- sprite -->

<?php include( 'partials/sprite.php' ); ?>

<div id="page" class="site">
    
        <!-- intro -->

        <?php include( 'partials/intro.php' ); ?>

        <!-- benefit -->

        <?php include( 'partials/benefit.php' ); ?>

        <!-- cards -->

        <?php include( 'partials/cards.php' ); ?>

        <!-- feedback -->

        <?php include( 'partials/feedback.php' ); ?>

        <!-- map -->

        <?php include( 'partials/map.php' ); ?>

        <button id="linkTop" class="button--up">
            <svg class="button__icon--up">
                <use xlink:href="#up"></use>
            </svg>
        </button>

 

<?php get_footer();?>
</div>