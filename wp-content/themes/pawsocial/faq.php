<?php /* Template Name: FAQ */ ?>

<?php
get_header();
?>

<section class="faq p-5">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion accordion-flush">
      <?php
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => 7,
        'facetwp' => true,
      );
      $query = new WP_Query($args);
      ?>
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= get_the_excerpt(); ?>">
                <?= get_the_title(); ?>
              </button>
            </h3>
            <div id="<?= get_the_excerpt(); ?>" class="accordion-collapse collapse" data-bs-parent="#questions">
              <div class="accordion-body">
                <?php the_content(); ?>
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