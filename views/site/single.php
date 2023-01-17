<?php

use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <img src="<?= $article->getImage();?>" alt="">
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id])?>"> <?= $article->category->title?></a></h6>
                            <h1 class="entry-title"><?= $article->title?></h1>
                        </header>
                        <div class="entry-content">
                            <p><?= $article->content?></p>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->author->name?> On <?= $article->getDate()?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" onclick="copyToClipboard(window.location.href)"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <?= $this->render('/partials/comment', [
                    'article'=>$article,
                    'comments'=>$comments,
                    'commentForm'=>$commentForm
                ])?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ])?>
        </div>
    </div>
</div>
<!-- end main content-->