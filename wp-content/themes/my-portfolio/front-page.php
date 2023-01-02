<?php get_header() ?>
<div class="container-fluid front-page p-0 mt-0">
    <div class="page py-3">
        <div class="row">
            <div class="col-md-5 py-5 px-2">
                <h1><?php bloginfo()?></h1>
                <p><?php the_field('post')?></p>
            </div>
            <div class="col-md-7">
                <img src="<?php the_field('front_page_image') ?>" class="rounded-5" height="auto" width="100%">
            </div>
        </div>



    </div>

</div>
<?php get_footer() ?>