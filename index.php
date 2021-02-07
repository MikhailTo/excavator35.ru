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

        <button id="linkTop" class="button button-up" onclick="toTop()">
            <svg class="button-up-icon">
                <use xlink:href="#up"></use>
            </svg>
        </button>

    </div>
</div>
<?php get_footer();?>