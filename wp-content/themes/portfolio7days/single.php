<?php
get_header();
?>


<section>

    <div class="container">

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <header class="entry-header">
    <!--
                <h1 class="entry-title">
                    <?php echo get_the_title(); ?>
                </h1>
     -->
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>


                <div class="meta">
                    <?php the_time('Y/n/j'); ?>
                    ｜
                    <?php the_category(', '); ?>
                </div>

            </header>


            <div class="entry-content">

                <?php the_content(); ?>

            </div>


            <footer class="entry-footer">

                <?php the_post_navigation([
                    'prev_text' => '<i class="fas fa-chevron-left"></i> %title',
                    'next_text' => '%title <i class="fas fa-chevron-right"></i>',
                    'in_same_term' => true,
                    // 'excluded_terms' => [],
                    // 'taxonomy' => 'category',
                ]); ?>

            </footer>


        <?php endwhile; ?>

    </div>

</section>






<?php
get_footer();
