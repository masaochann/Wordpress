<?php
/**
 * Template Name: プロフィール
 */

get_header();
?>


<!-- mainvisual -->


<section id="mainvisual">

    <div class="container text">

        <h1>
            Masaya Shinozaki<br class="sp"> PORTFOLIO
        </h1>

        <p>篠崎 雅也のポートフォリオです。<br class="sp">作品や情報を<br class="sp">発信いたします。</p>

    </div>

    <a href="#section-about" class="mainvisual-arrow">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual-arrow.svg" alt="次のコンテンツへ">
    </a>

</section>



<!-- about -->

<section id="section-about">

    <div class="container">

        <h2>できる限りのご要望に<br class="sp">お応えします</h2>

        <!-- <hr> -->

        <p>WEB制作のプロフェッショナルとして、企業サイトの制作、主にコーディングからプログラミングを担当させていただいております。これまでに積み重ねてきたノウハウを活かし、ご要望にマッチしたWEBサイトを、クライアントとともに作り上げていきます。</p>


        <?php
        // お知らせ一覧のURIを取得
        $category_id = get_cat_ID('お知らせ');
        $category_link = get_category_link($category_id);
        // var_dump($category_link);
        ?>

        <!-- <a class="button" href="/category/news/">お知らせ一覧</a> -->
        <a class="button" href="<?php echo $category_link; ?>">お知らせ一覧</a>

        <a class="button" href="#section-services">サービス</a>

    </div>

</section>



<!-- services -->

<section id="section-services">

    <div class="container">

        <h2>スキルセット</h2>

	<h3>使用言語</h3>

        <div class="row">

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-html5.svg" alt="HTML5">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-css3.svg" alt="CSS3">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-jquery.svg" alt="jQuery">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-wordpress.svg" alt="WordPress">
                </div>
            </div>
        
	</div>

	<h3>FW/ライブラリ</h3>

        <div class="row">

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-html5.svg" alt="HTML5">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-css3.svg" alt="CSS3">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-jquery.svg" alt="jQuery">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-wordpress.svg" alt="WordPress">
                </div>
            </div>

        </div>

	<h3>開発環境</h3>

        <div class="row">

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-html5.svg" alt="HTML5">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-css3.svg" alt="CSS3">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-jquery.svg" alt="jQuery">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-wordpress.svg" alt="WordPress">
                </div>
            </div>

        </div>

	<h3>その他</h3>

        <div class="row">

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-html5.svg" alt="HTML5">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-css3.svg" alt="CSS3">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-jquery.svg" alt="jQuery">
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 service-box">
                <div class="inner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-wordpress.svg" alt="WordPress">
                </div>
            </div>

        </div>

        <p>WEBサイト制作の最新技術を用いて、<br class="sp">クライアントのご要望を実現します。</p>

    </div>

</section>




<!-- portfolio -->

<section id="section-portfolio">

    <section id="section-portfolio-result">

        <div class="container-fluid">

            <div class="row gallery">

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio4.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio4.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio5.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio5.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio6.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio6.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio7.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio7.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 column">
                    <a class="portfolio-box" href="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio8.jpg" title="コーディング 株式会社〇〇〇〇">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio8.jpg" alt="コーディング 株式会社〇〇〇〇">
                        <div class="portfolio-box-caption">
                            <div class="category">
                                コーディング
                            </div>
                            <div class="name">
                                株式会社〇〇〇〇
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </section>


    <section id="section-portfolio-pdf">

        <h3>実績ダウンロード</h3>

        <a class="button" href="./assets/files/sample.pdf" download="SWINDLER実績.pdf">PDFダウンロード</a>

    </section>

</section>



<!-- news -->

<section id="section-news">

    <div class="container">

        <h2>お知らせ</h2>

        <?php
        $arg = [
            'posts_per_page' => 5, // 表示する件数
            'orderby'        => 'date', // 日付でソート
            'order'          => 'DESC', // DESCで最新から表示、ASCで古いものから表示
            'category_name'  => 'news', // 表示したいカテゴリーのスラッグを指定
            'post_status'    => 'publish'
        ];
        $posts = get_posts($arg);

        // echo '<pre>';
        // var_dump($posts);
        // echo '</pre>';
        ?>

        <?php if ($posts) : ?>

            <table class="table table-borderless">

                <?php
                foreach ($posts as $post) :

                    // var_dump($post);

                    setup_postdata($post);
                ?>

                    <tr>
                        <td><?php the_time('Y/n/j'); ?></td>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                    </tr>

                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

            </table>


        <?php //else : ?>

            <!-- <p>お知らせはありません。</p> -->

        <?php endif; ?>


        <?php
        // お知らせ一覧のURIを取得
        $category_id = get_cat_ID('お知らせ');
        $category_link = get_category_link($category_id);
        // var_dump($category_link);
        ?>

        <!-- <a class="button" href="/category/news/">お知らせ一覧</a> -->
        <a class="button" href="<?php echo $category_link; ?>">お知らせ一覧</a>

    </div>

</section>




<!-- contact -->

<section id="section-contact">

    <div class="container">

        <h2>お問い合わせはお気軽に</h2>

        <p>どのようなご相談もお気軽にご連絡ください。</p>

        <div class="row">
            <div class="col-6 tel">
                <a href="tel:05000000000">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-tel.svg" alt="お電話でのお問い合わせ">
                    <span class="en">050(0000)0000</span>
                </a>
            </div>
            <div class="col-6 email">
                <a href="mailto:contact@email.com">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-email.svg" alt="Eメールでのお問い合わせ">
                    <span class="en">contact@email.com</span>
                </a>
            </div>
        </div>

    </div>

</section>


<?php
get_footer();
