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
        <div class="col-md-5">
          <div class="form white-box" id="sign">
            <h2>Tell world leaders to stop secret contracts now.</h2>
            <p>We call for open information about public sector contracts, to strengthen public scrutiny, to empower citizens and to create fully accountable societies.</p>
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
          </div>

        </div>
      </div>

<?php get_footer(); ?>