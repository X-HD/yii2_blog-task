<?php
use yii\widgets\LinkPager;
?>

<nav class="gtco-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="gtco-logo"><a href="index.html">Verb<span>.</span></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li><a href="category.html">Home</a></li>
                    <li><a href="">News</a></li>
                    <li class="has-dropdown">
                        <a href="<?= \yii\helpers\Url::toRoute(['site/category','id'=>$article->category])?>">Category</a>
                        <ul class="dropdown">
                            <?php foreach ($categories as $category):?>
                                <li><a href=""><?= $category->title?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li><a href="category.html">About</a></li>
                    <li><a href="category.html">Log In</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-left">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="gtco-main">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12">
                <?php foreach($articles as $article):?>
                    <ul id="gtco-post-list">
                        <li class="full entry animate-box" data-animate-effect="fadeIn">
                            <a href="<?= \yii\helpers\Url::toRoute(['site/view', 'id'=>$article->id]);?>">
                                <div class="entry-img" style="background-image: url(<?= $article->getImage();?>)"></div>
                                <div class="entry-desc">

                                    <h3><?= $article->title;?></h3>
                                    <p><?= $article->description;?></p>
                                    <h7>
                                        <a href="<?= \yii\helpers\Url::toRoute(['site/category','id'=>$article->category->id])?>">
                                            <?= $article->category->title;?><br>
                                            <?= $article->getDate();?>
                                        </a>
                                    </h7>
                                </div>
                            </a>

                        </li>
                    </ul>
                <?php endforeach ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation">
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                    ?>
                </nav>
            </div>
        </div>
    </div>
</div>
