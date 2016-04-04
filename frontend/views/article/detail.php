<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-bold">PHP Thuần</h3>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="#">Pages</a>
            </li>
            <li>
                /
            </li>
            <li class="c-state_active">
                PHP Thuần
            </li>
        </ul>
    </div>
</div>
<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: BLOG LISTING -->
<div class="c-content-box c-size-md">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="c-content-blog-post-1-view">
                    <div class="c-content-blog-post-1">
                        <?php // start detail image 
                        if(!empty(trim($article->image))) {
                        ?>
                        <div class="c-media">
                            <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                                <div class="owl-carousel owl-theme c-theme owl-single">
                                    <div class="item">
                                        <div class="c-content-media-2" style="background-image: url(../../backend/web/uploads/article/<?php echo $article->image; ?>); max-height: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                        // end detail image ?>
                        <div class="c-title c-font-bold c-font-uppercase">
                            <a href="#"><?php echo $article->title; ?></a>
                        </div>
                        <div class="c-panel c-margin-b-30">
                            <div class="c-author">
                                <a href="#">By <span class="c-font-uppercase">ADMIN</span></a>
                            </div>
                            <div class="c-date">
                                on <span class="c-font-uppercase"><?php $date = new DateTime($article->created_time);
    echo $date->format('d M Y, H:iA');
    ?></span>
                            </div>
<!--                            <ul class="c-tags c-theme-ul-bg">
                                <li>
                                    ux
                                </li>
                                <li>
                                    marketing
                                </li>
                                <li>
                                    events
                                </li>
                            </ul>
                            <div class="c-comments">
                                <a href="#"><i class="icon-speech"></i> 30 comments</a>
                            </div>-->
                        </div>
                        <div class="c-desc">
                            <?php echo $article->content; ?>
                        </div>
                        <div class="c-comments">
<!--                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">Comments(30)</h3>
                                <div class="c-line-left">
                                </div>
                            </div>-->
<!--                            <div class="c-comment-list">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" alt="" src="img/content/team/team1.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#" class="c-font-bold">Sean</a> on <span class="c-date">23 May 2015, 10:40AM</span></h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" alt="" src="img/content/team/team3.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#" class="c-font-bold">Strong Strong</a> on <span class="c-date">21 May 2015, 11:40AM</span></h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="" src="img/content/team/team4.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#" class="c-font-bold">Emma Stone</a> on <span class="c-date">30 May 2015, 9:40PM</span></h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" alt="" src="img/content/team/team7.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#" class="c-font-bold">Nick Nilson</a> on <span class="c-date">30 May 2015, 9:40PM</span></h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    </div>
                                </div>
                            </div>-->
<!--                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold">Leave A Comment</h3>
                                <div class="c-line-left">
                                </div>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control c-square">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" class="form-control c-square">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Website" class="form-control c-square">
                                </div>
                                <div class="form-group">
                                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                    <?php echo \Yii::$app->view->renderFile('@app/views/layouts/sidebar.php'); ?>
                <!-- END: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
            </div>
        </div>
    </div>
</div>
<!-- END: BLOG LISTING  -->