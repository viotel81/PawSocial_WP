<?php /* Template Name: Home */ ?>

<?php
get_header();
?>
<section class="showcase text-center text-md-start">
    <div class="container mt-5 mt-md-0 pb-sm-3 py-md-5">
        <div class="row g-5 align-items-center justify-content-between">
            <div class="col-md-7 mb-md-3">
                <?php
                the_content();
                ?>
                <button id="modalBtn" class="btn-lg">Subscribe</button>
                <div id="simpleModal" class="modal">
                    <div class="modal-content">
                        <span id="closeBtn">&times;</span><br />
                        <p>
                            Subscribe to our newsletter and stay updated with Paw Social
                            news and promotions!
                        </p>
                        <form class="newsletter">
                            <div class="mb-3">
                                <input type="email" class="newsletter-email" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div>
                                <input type="submit" class="newsletter-btn" id="submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-fluid d-none d-sm-block" src="<?php the_post_thumbnail_url(); ?>">
            </div>
        </div>
    </div>
</section>

<section class="services py-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        <p class="lead text-center mb-5">
            We have an extensive list of services we provide at Paw Social and in
            the comfort of your homes.
        </p>
        <div class="cards row text-center g-4">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 4,
                'facetwp' => true,
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="fa fa-paw"></i>
                                </div>
                                <h3 class="card-title mb-3"><?= get_the_title(); ?></h3>
                                <p class="card-text">
                                    <?= the_excerpt(); ?>
                                </p>
                                <a href="what-we-do" class="btn-lg">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="testimonials py-5 px-sm-5">
    <div class="container">
        <h2 class="text-center pb-4">What Our Paw Owners Say</h2>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'facetwp' => true,
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="carousel-item <?php if (get_the_title() == 'Post2') {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    }  ?>">
                            <div class="card px-4">
                                <div class="card-body text-center">
                                    <div class="h1">
                                        <i class="fa fa-paw fa-x"></i>
                                    </div>
                                    <h4 class="card-title"><?php get_the_title(); ?></h4>
                                    <p class="card-text"></p>
                                    <?php
                                    the_content();
                                    ?>
                                    </p>
                                    <div class="author">
                                        <img class="rounded-circle" src="<?php the_post_thumbnail_url(); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="entertainers py-5 px-sm-5">
    <div class="container">
        <h2 class="text-center">Entertainers</h2>
        <p class="lead text-center mb-5">
            Our entertainers are trained on all the basic and extended needs of
            cats and dogs of all breeds and have worked in the field for 2+ years.
        </p>
        <div class="row g-4">
            <?php
            $args = array(
                'post_type' => 'entertainer',
                'posts_per_page' => 4,
                'facetwp' => true,
            );
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <img class="rounded-circle mb-3" src="<?php the_post_thumbnail_url(); ?>">
                                <h3 class="card-title mb-3"><?= get_the_title(); ?></h3>
                                <p class="card-text">
                                    <?= the_content(); ?>
                                </p>
                                <?php
                                dynamic_sidebar('card-1');
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>