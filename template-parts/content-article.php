<div class="row">
    <div class="left-content col-lg-3">
        <div class="row">
            <div class="col-lg-12 left-search-field">
            <?
            dynamic_sidebar('search-1');
            ?>
            </div>
        </div>
        <?
                            dynamic_sidebar('search-2');
                    ?>
    </div>
    <div class="right-content col-lg-8">
        <div class="container pt-5 mb-5 pl-5 pr-5">
            <header class="page-title">
                <h1 class="heading"><?= the_title(); ?></h1>
            </header>
            <div class="article-content mt-4">
                <div class="article-author mb-4">
                    <p>By&nbsp;<span class="author-name"><?= the_author_link(); ?></span></p>
                    <p><i class="article-date"><?= the_time(); ?>&nbsp;<?= the_date(); ?></i></p>
                    <div class="mt-2 tags-container"><?= the_tags('<span class="tag mr-2"><i class="fa fa-tag">','</i></span><span class="tag mr-2"><i class="fa fa-tag">','</i></span>');?><span class="comment-tag"><a href="#comments"><i class="fa fa-comment ml-2 mr-1"></i><? comments_number();?></a></span></div>    
                </div>
                <div class="article-text mt-4">
                    <?= the_content() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-content col-lg-1 d-none d-lg-block"></div>
</div>