<div class="row my-4">
    <?php if(have_rows('poster_images')) : while(have_rows('poster_images')) : the_row(); 
    
        $mainIMG = get_sub_field('main_image');

    ?>
        <!-- Left Image Column -->
        <div class="col-12 col-md-8">
            <figure class="otherwork--img">
                <img class="img-fluid" src="<?php echo $mainIMG; ?>">
            </figure>
        </div>
        <div class="col-md-4">
            <?php

                $detailIMGs = get_sub_field('detail_images');

                foreach($detailIMGs as $img) : ?>

                <figure class="otherwork--img">
                    <img class="img-fluid" src="<?php echo $img['url'] ?>">
                </figure>

            <?php endforeach; ?>
                
        </div>
    <?php endwhile; endif; ?>
</div>