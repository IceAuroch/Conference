

<!-- =========== feedback section -->


<?php 

$posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 2,
    'post_type'   => 'post', 
    'suppress_filters' => true,
) );

if($posts) :
 ?>


<section id="feedback" class="feedback_section">
    <h2 class="mb-4 text-center">Отзывы</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="slider_feedback_wrap">
                    <div class="slider_feedback">

                        <?php foreach( $posts as $post ) : ?>

                            
                            

                            <div class="slider_feedback_item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="feedback_slider_avatar">
                                            <div class="feedback_slider_avatar__img" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>

                                            <div class="feedback_slider_avatar__link">
                                                <a href="<?= get_field('fb_link', $post->ID);?>">
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#facebook-icon"></use>
                                                    </svg>
                                                </a>
                                            </div>

                                            
                                        </div>
                                    </div>
                                    

                                    <?php
                                    if (!empty(get_field('youtube_feedback', $post->ID))) :?>

                                        <div class="col-md-9">
                                            <div class="feedback_slider_content">
                                                <div class="feedback_video">
                                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/<?= get_field('youtube_feedback', $post->ID);?>">" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <?php else: ?>


                                        <div class="col-md-9">
                                            <div class="feedback_slider_content">
                                                <div class="feedback_slider_content__title d-flex justify-content-between align-items-center">
                                                    <p><?= $post->post_title ?></p>
                                                    <div class="stars">
                                                        <svg width="20" height="19" >
                                                            <use xlink:href="#star-icon"></use>
                                                        </svg>
                                                        <svg width="20" height="19" >
                                                            <use xlink:href="#star-icon"></use>
                                                        </svg>
                                                        <svg width="20" height="19" >
                                                            <use xlink:href="#star-icon"></use>
                                                        </svg>
                                                        <svg width="20" height="19" >
                                                            <use xlink:href="#star-icon"></use>
                                                        </svg>
                                                        <svg width="20" height="19" >
                                                            <use xlink:href="#star-icon"></use>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="feedback_slider_content__text">
                                                <?= $post->post_content ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    <?endif?>

                                </div>
                            </div>

                        <?php endforeach;?>


                    </div>

                    <div class="slider_btn slider_btn__prev d-none d-lg-flex">
                        <svg width="7.5" height="12" >
                            <use xlink:href="#left-icon"></use>
                        </svg>
                    </div>
                    <div class="slider_btn slider_btn__next d-none d-lg-flex">
                        <svg width="7.5" height="12" >
                            <use xlink:href="#right-icon"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php wp_reset_postdata(); ?><?php endif;?>