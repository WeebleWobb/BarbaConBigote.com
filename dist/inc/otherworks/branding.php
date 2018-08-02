<!-- Branding Work -->
<div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
    <div class="row">
        <?php 
            $args = array(
                'post_type'		=>		'other_works',
                'tax_query'     =>      array(
                    array(
                        'taxonomy'  =>      'project_type',
                        'field'     =>      'slug',
                        'terms'     =>      'branding'
                    )
                )
            );

            $the_query = new WP_Query($args);
        ?>

        <?php if($the_query->have_posts()) :  while($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <figure class="work">
                    <div class="work-img">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
                        <div class="work-hover">
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">View Work</a>
                        </div>
                    </div>
                    <figcaption class="work-caption">
                        <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                    </figcaption>
                </figure>
            </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <div class="col-12">
                <h4 class="text-center">Sorry, something went wrong and my case studies are showing up.</h4>
            </div>
        <?php endif; ?>
    </div>
</div>