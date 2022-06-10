<?php /* Template Name: What We Do */ ?>

<?php
get_header();
?>


<?php
$args = array(
  'post_type' => 'service',
  'posts_per_page' => 4,
  'facetwp' => true,
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
    if (get_the_title() == 'Fancy Pampering?' || get_the_title() == 'Call Us In') {
?>
      <section style="background-color: #F3D2C1;" class="what-we-do py-md-3 py-lg-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md pt-5 pt-md-0 py-lg-5">
              <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
            </div>
            <div class="col-md pb-3 pb-md-0">
              <h2 class="pt-3 pt-md-0 text-center text-md-start"><?= get_the_title(); ?></h2>
              <p>
                <?= the_content(); ?>
              </p>
            </div>
          </div>
        </div>
      </section>
    <?php
    } else if (get_the_title() == 'Paw Lodgings' || get_the_title() == 'Bring Them In') {
    ?>
      <section style="background-color: #fef6e4;" class="what-we-do py-md-3 py-lg-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md py-lg-5">
              <h2 class="pt-3 pt-md-0 text-center text-md-start"><?= get_the_title(); ?></h2>
              <p>
                <?= the_content(); ?>
              </p>
            </div>
            <div class="col-md pb-5 pb-md-0">
              <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
            </div>
          </div>
        </div>
      </section>
    <?php }; ?>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
get_footer();
?>