<?php get_header() ?>
<div class="container-fluid front-page p-0 mt-0">
    <div class="page py-3">
        <div class="row">
            <div class="col-md-5 py-5 px-2">
                <h1 class="px-2 py-3 mt-5"><?php bloginfo()?></h1>
                <p class="py-2"><?php the_field('post',16)?></p>
            </div>
            <div class="col-md-7">
                <img src="<?php the_field('front_page_image') ?>" class="rounded-circle" height="100%" width="90%">
            </div>
        </div>



    </div>

</div>
<?php get_footer() ?>