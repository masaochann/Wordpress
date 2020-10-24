<?php
get_header();
?>


<section>

    <div class="container">


        <header class="page-header">

            <?php
            // the_archive_title('<h1 class="page-title">', '</h1>');

            // $archive_title = get_the_archive_title();
            // $archive_title = str_replace('カテゴリー: ', '', $archive_title);
            // $archive_title = '「' . $archive_title . '」一覧';
            $archive_title = '「' . str_replace('カテゴリー: ', '', get_the_archive_title()) . '」一覧';

            // var_dump($archive_title);
            ?>

            <h1 class="page-title">
                <?php echo $archive_title; ?>
            </h1>

        </header>




        <?php
        while (have_posts()) :
            the_post();
        ?>


            <header class="entry-header">

                <?php the_title(
                    sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
                    '</a></h2>'
                ); ?>

                <div class="meta">
                    <?php the_time('Y/n/j'); ?>
                </div>


            </header>


            <div class="entry-content">

                <?php the_excerpt(); ?>

            </div>


            <footer class="entry-footer">

            </footer>


        <?php endwhile; ?>




        <footer class="page-footer">

            <?php the_posts_pagination(); ?>

        </footer>


    </div>


</section>


<?php
get_footer();
