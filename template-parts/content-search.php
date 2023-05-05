<div class="post-card mb-5">
    <div class="row">
        <a href="<?= the_permalink(); ?>">
            <div class="col-md-8">
                <div class="post-card-text">
                    <h2 class="post-card-title mb-1"><?= the_title(); ?></h2>
                </div>
                <p class="post-card-paragraph mb-1"><?php echo  get_the_excerpt(); ?></p>
            </div>
        </a>
    </div>
    <hr>
</div>
