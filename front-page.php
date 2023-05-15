<? get_header(); ?>
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
    <div class="right-content col-lg-9" style="padding:0">
        <div class="container mb-5" style="padding:0">
        <?=the_content();?>
        </div>
    </div>
</div>

<? get_footer(); ?>