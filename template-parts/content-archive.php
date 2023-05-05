<div class="post-card mb-5">
    <div class="row">
        <div class="col-md-4  text-center text-md-left">
            <a href="<?= the_permalink(); ?>">
                <img src="<?= get_the_post_thumbnail_url(); ?>">
            </a>
        </div>
        <a href="<?= the_permalink(); ?>">
            <div class="col-md-8">
                <div class="post-card-text">
                    <h2 class="post-card-title mb-1"><?= the_title(); ?></h2>
                    <div class="post-card-author"><?= the_author_link(); ?></div>
        </a>
        <p class="post-card-paragraph mb-1"><?php echo  get_the_excerpt(); ?></p>
        <br>
        <div class="mt-2 tags-container"><?= the_tags('<span class="tag mr-2"><i class="fa fa-tag">', '</i></span><span class="tag mr-2"><i class="fa fa-tag">', '</i></span>'); ?></div>
    </div>
</div>
</div>
</div>