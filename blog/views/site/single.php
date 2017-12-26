<nav class="gtco-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="gtco-logo"><a href="index.html">Verb<span>.</span></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li><a href="category.html">Home</a></li>
                    <li><a href="category.html">News</a></li>
                    <li class="has-dropdown">
                        <a href="<?= \yii\helpers\Url::toRoute(['site/category', 'id'=>$article->category->id]);?>">Category</a>
                        <ul class="dropdown">
                            <?php foreach ($categories as $category):?>
                                <li><a href=""><?= $category->title?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li><a href="category.html">About</a></li>
                    <li><a href="<?= \yii\helpers\Url::toRoute(['admin/index']);?>">Admin</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="gtco-maine">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-12">
                <article class="mt-negative">
                    <div class="content-article">

                        <div class="row row-pb-sm">
                            <div class="col-md-12 animate-box">
                                <blockquote>
                                    <p>&ldquo;<?= $article->title?> &rdquo; <cite>&mdash; Jean Smith</cite></p>
                                </blockquote>
                                <h7>
                                    <?= $article->category->title;?><br>
                                    <?= $article->getDate();?>
                                </h7>
                            </div>
                        </div>

                        <div class="row row-pb-sm">
                            <div class="col-lg-12 col-md-12 animate-box">
                                <figure>
                                    <img src="<?= $article->getImage();?>" alt="Free HTML5 Bootstrap Template by GetTemplates.co" >

                                </figure>
                            </div>
                        </div>

                        <div class="row row-pb-sm">
                            <div class="col-lg-12 col-md-12 col-md-push-0 animate-box">

                            </div>
                            <div class="col-lg-12 col-md-12 col-md-pull-0 cp-r animate-box">
                                <p><?= $article->content;?></p>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>