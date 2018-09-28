<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article tm-container-small">

    <h1 class="uk-article-title uk-text-center uk-margin-bottom"><?= $post->title ?></h1>

    <p class="uk-article-meta uk-text-center uk-margin-remove">
        <time datetime="<?=$post->date->format(\DateTime::W3C)?>" v-cloak>{{ "<?=$post->date->format(\DateTime::W3C)?>" | date "longDate" }}</time>
    </p>

    <?php if ($image = $post->get('image.src')): ?>
    <img class="tm-margin-top" src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>

    <div class="tm-margin-top tm-container-mini">

        <?= $post->content ?>

        <p class="uk-article-meta">
            <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
        </p>

        <?= $view->render('blog/comments.php') ?>

    </div>

</article>
