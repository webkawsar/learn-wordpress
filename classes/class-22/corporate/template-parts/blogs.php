<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="<?php echo get_template_directory_uri() . "/assets/img/section-img.png" ?>" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $query = new WP_Query(array(
                "post_type" => "page",
            ));

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();

                    ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <!-- <img src="<?php echo get_template_directory_uri() . "/assets/img/blog1.jpg" ?>" alt="#"> -->
                                  
                                  <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"><?php the_time("d F, Y"); ?></div>
                                    <h2><a href="blog-single.html"><?php the_title(); ?></a></h2>
                                    <p class="text"><?php the_content(); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                <?php
                endwhile;
            else:
                _e("Posts not found", "myTranslateId");
            endif;
            ?>
        </div>
    </div>
</section>