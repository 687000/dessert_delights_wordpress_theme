<? get_header(); ?>
<?
if (have_posts()) {
    while (have_posts()) {
        the_post();
        if (is_page('About')) {
            get_template_part('template-parts/content', 'about');
        } else {
?>
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
                    <div class="container pt-5 mb-5 pl-5 pr-5 page-container">
                        <header class="page-title mb-3">
                            <?
                            if (is_page('Contact')) {
                            ?>
                                <h1 class="heading text-center"><?= the_title(); ?></h1>
                            <?
                            } else {
                            ?>
                                <h1 class="heading"><?= the_title(); ?></h1>
                            <? } ?>
                        </header>
                        <div class="contact-container">
                            <?= the_content() ?>
                        </div>
                    </div>
                </div>
                <div class="empty-content col-lg-1 d-none d-lg-block"></div>
            </div>
<?
        }
    }
}
?>
<? get_footer(); ?>