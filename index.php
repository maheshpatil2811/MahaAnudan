<?php
include 'header.php';
$slides = $db->select("slides", "*", ['LIMIT' => [0, 5]]);
//$latest_3_news = $db->select("schemes", "*",['LIMIT' => [0,3]],[ "ORDER"=>['id'=>'DESC']]);
$latest_3_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC  limit 3 OFFSET 0');
$news_4to7 = $db->query('SELECT * FROM schemes  ORDER BY id DESC  limit 4 OFFSET 3');
$news_8to12 = $db->query('SELECT * FROM schemes  ORDER BY id DESC  limit 4 OFFSET 7');
//$slides=$db->query('SELECT TOP 3 * FROM slides');
//$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC');
//$slides=$db->select("slides", "*", ["ORDER" => "DESC"],['LIMIT'=>[0,5]]);
//$database->select("account", "*", ["ORDER" => ["id" => "DESC",]]);

?>
<!-- Start Main content -->
<main>
    <div class="featured-slider-2">
        <div class="featured-slider-2-items">
            <?php
            foreach ($slides as $slide) {
            ?>
                <div class="slider-single">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-abulute" style="background-image: url('<?php echo $slide['image']; ?> ');background-size: cover; background-repeat: no-repeat; height: 100%; " >

                            <div class="post-content-overlay">
                                <div class="container">

                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <?php echo $slide['title']; ?>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container position-relative">
            <div class="arrow-cover color-white"></div>
            <div class="featured-slider-2-nav-cover">
                <div class="featured-slider-2-nav">
                    <?php
                    foreach ($slides as $slide) {
                    ?>
                        <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="<?php echo $slide['image']; ?>"  alt="">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row"><?php echo $slide['title']; ?></h5>

                                </div>
                            </div>
                        </div>
                    <?php  } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End feature -->
    <div class="container">
        <div class="hot-tags pt-30 pb-30 font-small align-self-center">
            <div class="widget-header-3">
                <div class="row align-self-center">
                    <div class="col-md-4 align-self-center">
                        <h5 class="widget-title">Featured posts</h5>
                    </div>

                </div>
            </div>
        </div>
        <div class="loop-grid mb-30">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                        <div class="arrow-cover"></div>
                        <div class="slide-fade">
                            <?php
                            foreach ($latest_3_news as $news) {
                            ?>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url('<?php echo $news['image']; ?>');">
                                        <a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">

                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <?php foreach ($news_4to7 as $news) { ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url('<?php echo $news['image']; ?>')">
                                <a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>
                            </div>
                            <div class="post-content p-30">

                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    </article>
                <?php  } ?>

            </div>
        </div>
    </div>
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <h5 class="mt-5 mb-30">Travel tips</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                <?php foreach ($news_8to12 as $news) { ?>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(<?php echo $news['image']; ?>)">
                                                <a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>

                                            </div>
                                            <div class="post-content p-30">

                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <?php echo  mb_strimwidth($news['data'], 0, 250); ?>
                                                        <?php
                                                        if (strlen($news['data']) > 250) { ?>
                                                            <a href='scheme.php?id=<?php echo $news['id']; ?>'>readmore...</a>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                   
                    
                </div>
                <div class="col-lg-4">
                    <!--<div class="widget-area">
                        <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                            <img class="about-author-img mb-25" src="assets/imgs/authors/author.jpg" alt="">
                            <h5 class="mb-20">Hello, I'm Steven</h5>
                            <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.</p>
                            <strong>Follow me: </strong>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Spending Some Quality Time with Kids? It’s Possible</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">05 August</span>
                                                    <span class="post-by has-dot">150 views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-6.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Relationship Podcasts are Having “That” Talk</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">6k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-7.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Here’s How to Get the Best Sleep at Night</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">15 August</span>
                                                    <span class="post-by has-dot">16k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=" wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">12 August</span>
                                                    <span class="post-by has-dot">3k views</span>
                                                </div>
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        <!--<div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Last comments</h5>
                            </div>
                            <div class="post-block-list post-module-2">
                                <ul class="list-post">
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>David</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">16 Jan 2020</span>
                                                </p>
                                                <p class="text-muted font-small">A writer is someone for whom writing is more difficult than...</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">12 Feb 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Striking pewter studded epaulettes silver zips</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html">
                                                    <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                    <span class="ml-15 font-small text-muted has-dot">18 May 2020</span>
                                                </p>
                                                <p class="text-muted font-small">Workwear bow detailing a slingback buckle strap</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Instagram</h5>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-1.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-2.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-3.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-4.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-5.jpg" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="assets/imgs/news/thumb-6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->


<?php
include 'footer.php';
?>