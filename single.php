<?php get_header();  ?>
<body>
<main id="main-page">
    <?php
    if( have_posts() ):
        while (have_posts() ): the_post();
            get_template_part('content');
        endwhile;
    else:
        echo 'Tidak ada postingan';
    endif;

    ?>
    <!--    <aside>-->
    <!--        --><?php //dynamic_sidebar('sidebar1') ?>
    <!--    </aside>-->
    <!--    <div class="clear"></div>-->
    <?php get_footer(); ?>

<a href="/wordpress" class="btn btn-success">Back to Home</a>
</main>
</body>

<?php get_footer(); ?>
