<?php
include 'header.php';
$id = $_REQUEST['id'];
$scheme = $db->select("schemes", "*", ['id' => $id])[0];


$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC limit 3');
?>
<main class="bg-grey pb-30">

    <div class="container single-content">
        <div class="entry-header pt-80 pb-30 mb-20">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-sm-3">
                    <figure class="mb-0 mt-lg-0 mt-3 border-radius-5">
                        <img class=" border-radius-5" src="<?php echo $scheme['image']; ?>" alt="">
                    </figure>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="post-content">
                        
                        <h1 class="entry-title mb-30 font-weight-900">
                        <?php echo $scheme['title']; ?>
                        </h1>
                        
                        
                    </div>
                </div>

            </div>
        </div>
        <!--end single header-->
        <!--figure-->
        <article class="entry-wraper mb-50">
            <div class="excerpt mb-30">
            <?php echo $scheme['data']; ?>
            </div>
            
            
            
            <!--author box-->
            
            <!--related posts-->
            <div class="related-posts">
                <div class="post-module-3">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Latest Schemes</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">

                        <?php
                         foreach($latest_news as $news){ 
                            ?>
                        <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" >
                                            <img src="<?php echo $news['image']; ?>" ><a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8 align-self-center">
                                    <div class="post-content">
                                        
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                            
                                        </h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
            <!--More posts-->
            <div class="single-more-articles border-radius-5">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">You might be interested in</h5>
                    <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/news/thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Best Time to Travel to Cambodia</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 Jan</span>
                                        <span class="post-by has-dot">13k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-10">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets/imgs/news/thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">20 Photos to Inspire You to Visit Cambodia</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">14k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Comments-->
            <div class="comments-area">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Comments</h5>
                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="assets/imgs/authors/author-4.jpg" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">Rosie</a>
                                        </h5>
                                        <p class="date">6 minutes ago </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="assets/imgs/authors/author-2.jpg" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">Agatha Christie</a>
                                        </h5>
                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="assets/imgs/authors/author.jpg" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">Steven</a>
                                        </h5>
                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-list wow fadeIn animated">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="assets/imgs/authors/author-3.jpg" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#">Danielle Steel</a>
                                        </h5>
                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--comment form-->
            <div class="comment-form wow fadeIn animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Leave a Reply</h5>
                </div>
                <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn button button-contactForm">Post Comment</button>
                    </div>
                </form>
            </div>
        </article>
    </div>
    <!--container-->
</main>
<?php include 'footer.php'; ?>