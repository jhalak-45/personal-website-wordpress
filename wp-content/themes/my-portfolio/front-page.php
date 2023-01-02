<?php get_header() ?>
<div class="container-fluid">
    <div class="page py-3">
        <div class="row">
            <div class="col-md-5 py-5">
                <h1><?php bloginfo()?></h1>
                <p><?php the_field('post')?></p>
            </div>
            <div class="col-md-7">
                <img src="<?php the_field('front_page_image') ?>" class="rounded-circle">
            </div>
        </div>



    </div>

</div>
<?php get_footer() ?>