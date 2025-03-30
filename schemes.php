<?php
include "header.php";
$cat_id = $_REQUEST['id'];
$category=$db->select("categories",'*',['id'=>$cat_id])[0];
//$schemes = $db->select("schemes", "*", ['cat_id' => $cat_id]);
$schemes = $db->query("SELECT * FROM schemes where cat_id=$cat_id  ORDER BY id DESC ");
$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC limit 3');
?>

<main>
    <!--archive header-->
    <div class="archive-header pt-50">
        <div class="container">
            <h2 class="font-weight-900"><?php echo $category['name']; ?></h2>

            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
    </div>

    <div class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">

                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                <?php foreach ($schemes as $scheme) {  ?>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" >
                                                
                                            <a class="img-link" href="scheme.php?id=<?php echo $scheme['id']; ?>"><img src="<?php echo $scheme['image']; ?>" ></a>
                                                
                                            </div>
                                            <div class="post-content p-30">

                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="scheme.php?id=<?php echo $scheme['id']; ?>"><?php echo $scheme['title']; ?></a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p><?php echo mb_strimwidth($scheme['data'], 0, 250); ?>
                                                            <?php
                                                            if (strlen($scheme['data']) > 250) { ?>
                                                                <a href='scheme.php?id=<?php echo $scheme['id']; ?>'>readmore...</a>
                                                            <?php } ?>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php }  ?>

                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                         
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">New Schemes</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <?php 
                                    foreach($latest_news as $news){
                                    ?>
                                    <li class="mb-30 wow fadeInUp animated">
                                        <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a></h6>
                                                
                                            </div>
                                            <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="scheme.php?id=<?php echo $news['id']; ?>">
                                                    <img src="<?php echo $news['image']; ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php  } ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>