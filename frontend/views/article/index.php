<?php

use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
?>

<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
<div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
    <div class="container">
        <div class="c-page-title c-pull-left">
            <h3 class="c-font-uppercase c-font-bold">Php thuần</h3>
        </div>
        <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
            <li>
                <a href="#">Pages</a>
            </li>
            <li>
                /
            </li>
            <li class="c-state_active">
                Php thuần
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
                <div class="c-content-blog-post-1-list">
                    <?php
                    foreach ($models as $item) {
                        ?>
                        <div class="c-content-blog-post-1">
                            <?php
                            // kiểm tra nếu image không tồn tại thì không hiển thị lên
                            if (!empty($item->image)) {
                                ?>
                                <div class="c-media">
                                    <div class="c-content-media-2-slider" data-slider="owl" data-single-item="true" data-auto-play="4000">
                                        <div class="owl-carousel owl-theme c-theme owl-single">
                                            <div class="item">
                                                <div class="c-content-media-2" style="background-image: url(../../backend/web/uploads/article/<?php echo $item->image; ?>); min-height: 250px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <?php } ?>
                            <div class="c-title c-font-bold c-font-uppercase">
                                <a href="#"><?php echo $item->title; ?></a>
                            </div>
                            <div class="c-desc">
    <?php echo StringHelper::truncate($item->summary, 350, ''); ?> <a href="#">read more...</a>
                            </div>
                            <div class="c-panel">
                                <div class="c-author">
                                    <a href="#">By <span class="c-font-uppercase">ADMIN</span></a>
                                </div>
                                <div class="c-date">
                                    on <span class="c-font-uppercase"><?php $date = new DateTime($item->created_time);
    echo $date->format('d M Y, H:iA');
    ?></span>
                                </div>
<!--                                <ul class="c-tags c-theme-ul-bg">
                                    <li>
                                        ux
                                    </li>
                                    <li>
                                        marketing
                                    </li>
                                    <li>
                                        events
                                    </li>
                                </ul>-->
<!--                                <div class="c-comments">
                                    <a href="#"><i class="icon-speech"></i> 30 comments</a>
                                </div>-->
                            </div>
                        </div>
                    <?php } ?>

                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                    <!--                    <div class="c-pagination">
                                            <ul class="c-content-pagination c-theme">
                                                <li class="c-prev">
                                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="c-active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">4</a>
                                                </li>
                                                <li class="c-next">
                                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>-->
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