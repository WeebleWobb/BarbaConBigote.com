<div class="row ux-ui">
    <!-- Left Image Column -->
    <?php if(have_rows('left_image_column')) : ?>
        <div class="col-12 col-md-6">
            <?php while(have_rows('left_image_column')) : the_row(); 
            
                $image = get_sub_field('image');
                $image_caption = get_sub_field('image_caption');

            ?>
                <figure class="otherwork--img">
                    <figcaption>
                        <p><?php echo $image_caption; ?></p>
                    </figcaption>
                    <img class="img-fluid" src="<?php echo $image; ?>">
                </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <!-- Right Image Column -->
    <?php if(have_rows('right_image_column')) : ?>
        <div class="col-md-6">
            <?php while(have_rows('right_image_column')) : the_row(); 
            
                $image = get_sub_field('image');
                $image_caption = get_sub_field('image_caption');
            
            ?>
                <figure class="otherwork--img">
                    <figcaption>
                        <p><?php echo $image_caption; ?></p>
                    </figcaption>
                    <img class="img-fluid" src="<?php echo $image; ?>">
                </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>