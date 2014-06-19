<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
      <div class="row">
        <div class="col-md-7">
        
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
          <?php else : ?>
					
					<article id="post-not-found">
            <header>
              <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
            </header>
            <section class="post_content">
              <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
            </section>
					</article>
					
					<?php endif; ?>
          
        </div>
        <?
          $form_heading = get_post_meta($post->ID, 'custom_tagline' , true);
          $form_intro = get_post_meta($post->ID, 'custom_text' , true);
          $form_footer = get_post_meta($post->ID, 'custom_foot' , true);
        ?>
        <div class="col-md-5">
          <div class="form white-box" id="sign">
            <h2><?php echo $form_heading ;?></h2>
            <?php echo $form_intro;?>
            <form action="https://sendy.okfn.org/subscribe" method="POST" accept-charset="utf-8">
              <fieldset class="left">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="name"/>
              </fieldset>
              <fieldset class="right">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="email address"/>
              </fieldset>
              <input type="hidden" name="list" value="IVZ8ORGT8lkDGtPP892wzLzw"/>
              <input type="submit" name="submit" id="submit" value="Sign"/>
            </form>
            <? if ($form_footer) { ?>
            <small class="footnote"><?php echo $form_footer ;?></small>
            <? } ?>
          </div>

        </div>
      </div>

<?php get_footer(); ?>