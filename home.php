<? get_header(); ?>
<div class="row">
    <div class="left-content col-lg-3">
        <div class="row">
            <div class="col-lg-12 left-search-field">
            <?
            dynamic_sidebar('search-1');
            ?>
                <!-- <form class="form-inline p-3">
                    <input class="form-control mb-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn search-btn" type="submit">Search</button>
                </form> -->
            </div>
        </div>
        <?
                            dynamic_sidebar('search-2');
                    ?>
    </div>
    <div class="right-content col-lg-8">
        <div class="container pt-5 mb-5 pr-5 pl-5">
            <header class="page-title">
                <h1 class="heading">Blogs</h1>
            </header>
            <div class="archive-content mt-4 m">
                <div class="post-card-container mt-4">
                    <?
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>
                    <?= the_posts_pagination();?>
                </div>
            </div>
        </div>
        <div class="empty-content col-lg-1 d-none d-lg-block"></div>
    </div>
</div>
<? get_footer(); ?>