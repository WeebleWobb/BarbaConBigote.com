<div class="row mt-4 mb-2">
    <?php $branding = get_field('branding_images'); ?>

        <div class="col-12 col-md-8">
            <figure class="otherwork--img">
                <img class="img-fluid" src="<?php echo $branding['main_image']; ?>">
            </figure>
        </div>
        <div class="col-12 col-md-4">
            <?php

                $detailIMGs = $branding['detail_images'];

                foreach($detailIMGs as $img) : ?>

                <figure class="otherwork--img">
                    <img class="img-fluid" src="<?php echo $img['url'] ?>">
                </figure>

            <?php endforeach; ?>

        </div>
</div>

<!-- Image Row -->
<div class="row">
    <?php

        $detailIMGs = $branding['additional_images'];

        foreach($detailIMGs as $img) : ?>

        <div class="col-12 col-md-6">
            <figure class="otherwork--img">
                <img class="img-fluid" src="<?php echo $img['url'] ?>">
            </figure>
        </div>

    <?php endforeach; ?>   
</div>