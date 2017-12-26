<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="gtco-loader"></div>

<div id="page">

    <?= $content ?>

    <footer id="gtco-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <h3 class="footer-heading">Most Popular</h3>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <div class="post-img">
                            <a href="#"><img src="/public/images/img_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
                        </div>
                        <div class="post-copy">
                            <h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
                            <a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <div class="post-img">
                            <a href="#"><img src="/public/images/img_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
                        </div>
                        <div class="post-copy">
                            <h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
                            <a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <div class="post-img">
                            <a href="#"><img src="/public/images/img_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>
                        </div>
                        <div class="post-copy">
                            <h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>
                            <a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
                    </p>
                    <p>
                    <ul class="gtco-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
