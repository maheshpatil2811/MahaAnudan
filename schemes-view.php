<?php
include 'header.php';
$cat_id = $_REQUEST['id'];
$schemes = $db->select("schemes", "*", ['cat_id' => $cat_id]);
?>

<div id="main">
    <div class='container'>
        <div class='row'>
            <div class='content span8 blog-style'>
                <?php foreach ($schemes as $scheme) { ?>
                    <article>
                        <div class=''>
                            <figure style="height:100;">
                                <img src="<?php echo $scheme['image']; ?>" alt="" />
                            </figure>
                            <div class='text'>
                                <div class='inner-border'>
                                    <div class="title "><a href='scheme-view.php?id=<?php echo $scheme['id']; ?>'><b><?php echo $scheme['title']; ?></b> </a></div>
                                    <div class='description'>

                                        <div class='excerpt'>

                                            <?php echo mb_strimwidth($scheme['data'], 0, 500); ?>
                                            <?php
                                            if (strlen($scheme['data']) > 500) { ?>
                                                <a href='scheme-view.php?id=<?php echo $scheme['id']; ?>'>readmore...</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                <div class="pagination">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li class='active'><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>

            </div>

            <aside class='span4'>
                <div class='widget'>
                    <div class='inner inner-sides'>
                        <div class="social-counter">
                            <div class='counter first-child'>
                                <a href="http://www.facebook.com/TeoThemes" class='facebook'>
                                    <div class='inner-counter'><i></i> 432k</div>
                                </a>
                            </div>
                            <div class='counter'>
                                <a href="http://twitter.com/finaldestiny16" class='twitter'>
                                    <div class='inner-counter'><i></i> 64k</div>
                                </a>
                            </div>
                            <div class='counter last-child'>
                                <a href="#" class='rss'>
                                    <div class='inner-counter'><i></i> 128k</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class='inner'>
                        <h3>Follow us on Facebook</h3>
                        <div class="follow-us">
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=292&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23fff&amp;header=false&amp;appId=225987124123858" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px;" allowTransparency="true"></iframe>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <div class='inner'>
                        <div class="tabbable"> <!-- Only required for left/right tabs -->
                            <ul class="nav nav-tabs">
                                <li class='first-child active'>
                                    <a data-toggle="tab" href="#tab1">
                                        <div class='inner-tab'>Popular</div>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2">
                                        <div class='inner-tab'>Recent</div>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3">
                                        <div class='inner-tab'>Comments</div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane active">
                                    <ul>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab01.jpg' alt='' />
                                                </figure>
                                                <p>Putin learns about Putin trying to assasinate Putin <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab02.jpg' alt='' />
                                                </figure>
                                                <p>iPhone5 released by Apple just today! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab03.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab04.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2" class="tab-pane">
                                    <ul>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab01.jpg' alt='' />
                                                </figure>
                                                <p>Putin learns about Putin trying to assasinate Putin <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab02.jpg' alt='' />
                                                </figure>
                                                <p>iPhone5 released by Apple just today! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab03.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab04.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3" class="tab-pane">
                                    <ul>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab01.jpg' alt='' />
                                                </figure>
                                                <p>Putin learns about Putin trying to assasinate Putin <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab02.jpg' alt='' />
                                                </figure>
                                                <p>iPhone5 released by Apple just today! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab03.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="" href="#">
                                                <figure>
                                                    <img src='img/sample-tab04.jpg' alt='' />
                                                </figure>
                                                <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget'>
                    <div class='inner'>
                        <h3>News in Pictures</h3>
                        <div class='photo-list'>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                            <div class='photo'>
                                <a href="img/slider-big.jpg" rel='prettyPhoto[news-in-pictures]' data-toggle="tooltip" title="iPhone 5 released by Apple">
                                    <img src="img/sample-tab01.jpg" alt="News in pictures" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='widget'>
                    <div class='inner'>
                        <h3>Featured video</h3>
                        <div class="featured-video">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/nKIu9yen5nc" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class='widget'>
                    <div class='inner'>
                        <h3>Popular Posts</h3>
                        <div class='list'>
                            <ul>
                                <li>
                                    <a title="" href="#">
                                        <figure>
                                            <img src='img/sample-tab01.jpg' alt='' />
                                        </figure>
                                        <p>Putin learns about Putin trying to assasinate Putin <br> <span> September 10, 2012 </span></p>
                                    </a>
                                </li>
                                <li>
                                    <a title="" href="#">
                                        <figure>
                                            <img src='img/sample-tab02.jpg' alt='' />
                                        </figure>
                                        <p>iPhone5 released by Apple just today! <br> <span> September 10, 2012 </span></p>
                                    </a>
                                </li>
                                <li>
                                    <a title="" href="#">
                                        <figure>
                                            <img src='img/sample-tab03.jpg' alt='' />
                                        </figure>
                                        <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                    </a>
                                </li>
                                <li>
                                    <a title="" href="#">
                                        <figure>
                                            <img src='img/sample-tab04.jpg' alt='' />
                                        </figure>
                                        <p>Envato networks reached one million users! <br> <span> September 10, 2012 </span></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>