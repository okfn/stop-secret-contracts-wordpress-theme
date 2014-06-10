<?php
/*
Template Name: Sidebar
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix row">
  <div id="main" class="col-sm-8 clearfix" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <?php //the_title(); ?>
      <?php the_content(); ?>
      <?php //the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
      <?php //comments_template('',true); ?>
      <?php endwhile; ?>
    </article>
    
    <?php else : ?>
    
    <article id="post-not-found">
      <header>
        <h1>
          <?php _e("Not Found", "wpbootstrap"); ?>
        </h1>
      </header>
      <section class="post_content">
        <p>
          <?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?>
        </p>
      </section>
    </article>
  
    <?php endif; ?>
  </div>
  <?php get_sidebar(); // sidebar 1 ?>
</div>
<?php get_footer(); ?>
