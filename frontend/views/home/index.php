<?php 
use yii\helpers\StringHelper;  
?>
<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-9 -->
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/slider.php'); ?>
<!-- END: LAYOUT/SLIDERS/REVO-SLIDER-9 -->
<!-- BEGIN: CONTENT/BLOG/RECENT-POSTS -->
<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-blog-post-card-1-slider" data-slider="owl" data-items="3" data-auto-play="8000">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Bài viết gần đây</h3>
                <div class="c-line-center c-theme-bg">
                </div>
            </div>
            <!-- End-->
            <!-- Begin: Owlcarousel -->
            <div class="owl-carousel owl-theme c-theme">
                <?php foreach ($model as $item) { ?>
                    <div class="item">
                        <div class="c-content-blog-post-card-1 c-option-2">
                            <div class="c-media c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="#"><i class="icon-link"></i></a>
                                        
                                        <a href="../../backend/web/uploads/article/<?php echo $item->image; ?>" data-lightbox="fancybox" data-fancybox-group="gallery">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                                <img class="c-overlay-object img-responsive" src="../../backend/web/uploads/article/<?php echo $item->image; ?>" alt="">
                            </div>
                            <div class="c-body">
                                <div class="c-title c-font-uppercase c-font-bold">
                                    <a href="#"><?php echo $item->title; ?></a>
                                </div>
                                <div class="c-author">
                                    By <a href="#"><span class="c-font-uppercase">Admin</span></a>
                                    on <span class="c-font-uppercase"><?php $date = new DateTime($item->created_time);
                                    echo $date->format('d M Y, H:iA');?><!--20 May 2015, 10:30AM--></span>
                                </div>
                                <div class="c-panel">
                                    <!-- comment and tag -->
<!--                                    <ul class="c-tags c-theme-ul-bg">
                                        <li>
                                            ux
                                        </li>
                                        <li>
                                            web
                                        </li>
                                        <li>
                                            events
                                        </li>
                                        
                                    </ul>
                                    <div class="c-comments">
                                        <a href="#"><i class="icon-speech"></i> 30 comments</a>
                                    </div>-->
                                </div>
                                <?php echo StringHelper::truncate($item->summary, 100, '...'); ?>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <!-- End-->
        </div>
        <!-- End-->
    </div>
</div>
<!-- END: CONTENT/BLOG/RECENT-POSTS -->
<!-- BEGIN: CONTENT/MISC/ABOUT-3 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">About us</h3>
                    <div class="c-line-left c-theme-bg">
                    </div>
                </div>
                <!-- End-->
                <?php echo $about->value; ?>
            </div>
            <div class="col-sm-6">
                <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                    <ul class="nav nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-31" role="tab" data-toggle="tab" class="c-font-16">BÀI VIẾT PHỔ BIẾN</a>
                        </li>
<!--                        <li role="presentation">
                            <a href="#tab-32" role="tab" data-toggle="tab" class="c-font-16">BÌNH LUẬN</a>
                        </li>-->
                        <li role="presentation">
                            <a href="#tab-33" role="tab" data-toggle="tab" class="c-font-16">BÀI VIẾT MỚI NHẤT</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-31">
                            <ul class="c-tab-items">
                                <?php foreach ($popular_article as $item) { ?>
                                <li class="row">
                                    <div class="col-sm-4 col-xs-5">
                                        <div class="c-photo">
                                            <img class="img-responsive" width="150" height="100" src="../../backend/web/uploads/article/<?php echo $item->image; ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <h4 class="c-font-20"><?php echo $item->title; ?></h4>
                                        <p class="c-font-16">
                                            <?php echo StringHelper::truncate($item->summary, 100, '...'); ?>
                                        </p>
                                    </div>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-33">
                            <ul class="c-tab-items">
                                <?php foreach ($new_article as $item) { ?>
                                <li class="row">
                                    <div class="col-sm-4 col-xs-5">
                                        <div class="c-photo">
                                            <img class="img-responsive" width="150" height="100" src="../../backend/web/uploads/article/<?php echo $item->image; ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-xs-7">
                                        <h4 class="c-font-20"><?php echo $item->title; ?></h4>
                                        <p class="c-font-16">
                                            <?php echo StringHelper::truncate($item->summary, 100, '...'); ?>
                                        </p>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/MISC/ABOUT-3 -->