<?php get_header();?>

<!-- sprite -->

<?php include( 'partials/sprite.php' ); ?>

<div id="page" class="site">
    <div id="content" class="site-content">
        <!-- intro -->

        <?php include( 'partials/intro.php' ); ?>

        <!-- benefit -->

        <?php include( 'partials/benefit.php' ); ?>

        <!-- description -->

        <?php include( 'partials/description.php' ); ?>

        <!-- feedback -->

        <?php include( 'partials/feedback.php' ); ?>

        <!-- map -->

        <?php include( 'partials/map.php' ); ?>

        <button id="linkTop" class="button--up" onclick="toTop()">
            <svg class="button__icon--up">
                <use xlink:href="#up"></use>
            </svg>
        </button>

    </div>

<?php get_footer();?>
</div>