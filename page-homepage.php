<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?
  $banner_text = get_post_meta($post->ID, 'custom_bannertext' , true);
  $button_text_1 = get_post_meta($post->ID, 'custom_bannerbutton1text' , true);
  $button_id_1 = get_post_meta($post->ID, 'custom_bannerbutton1id' , true);
  $button_text_2 = get_post_meta($post->ID, 'custom_bannerbutton2text' , true);
  $button_id_2 = get_post_meta($post->ID, 'custom_bannerbutton2id' , true);
  $action_heading_1 = get_post_meta($post->ID, 'custom_action1heading' , true);
  $action_heading_2 = get_post_meta($post->ID, 'custom_action2heading' , true);
  $action_text_2 = get_post_meta($post->ID, 'custom_action2text' , true);
  $action_id_2 = get_post_meta($post->ID, 'custom_action2id' , true);
  $action_heading_3 = get_post_meta($post->ID, 'custom_action3heading' , true);
  $action_text_3 = get_post_meta($post->ID, 'custom_action3text' , true);
  $action_id_3 = get_post_meta($post->ID, 'custom_action3id' , true);
  $action_heading_4 = get_post_meta($post->ID, 'custom_action4heading' , true);
  $action_text_4 = get_post_meta($post->ID, 'custom_action4text' , true);
?>
    
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2><?php echo $banner_text ;?></h2>
            <a class="btn btn-lg" href="#<?php echo $button_id_1 ;?>"><?php echo $button_text_1 ;?></a> <?php if (!empty($button_text_2)) { ?> &nbsp; <a class="btn btn-lg" href="#<?php echo $button_id_2 ;?>"><?php echo $button_text_2 ;?></a><?php } ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        
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
        
      </div>
   </div>
   
   <div class="grey">
     <? $n = 1 ;?>
     <div class="container">
        <div class="row" id="campaigns">
          <div class="col-sm-12">
            <h2><?php the_title(); ?></h2>
            <h4><? echo $n++ .'. '. $action_heading_1 ?></h4>
            
            <iframe src="http://stopsecretcontracts.herokuapp.com/campaigns/widget/campaigns/" width="100%" height="660px" frameborder="0"></iframe>
          </div>
        </div>
        
      </div>
      
      <?php if (!empty($action_heading_2)) { ?>
      <section id="<?php echo $action_id_2 ;?>">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h4><? echo $n++ .'. '. $action_heading_2; ?></h4>
              <?php echo $action_text_2 ;?>
            </div>
          </div>
        </div>
      </section>
      <? } ?>
      
      <?php if (!empty($action_heading_3)) { ?>
      <section id="<?php echo $action_id_3 ;?>">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h4><? echo $n++ .'. '. $action_heading_3; ?></h4>
              <?php echo $action_text_3 ;?>
            </div>
          </div>
        </div>
      </section>
      <? } ?>
      
      <?php if (!empty($action_heading_4)) { ?>
      <section id="newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h4><? echo $n++ .'. '. $action_heading_4; ?></h4>
            </div>
          </div>
          <form accept-charset="utf-8" method="POST" action="https://sendy.okfn.org/subscribe" class="row">
            <fieldset class="col-md-5">
              <label for="name">Name</label>
              <input type="text" id="name" name="name">
            </fieldset>
            
            <fieldset class="col-md-5">
              <label for="email">Email</label>
              <input type="text" id="email" name="email">
            </fieldset>
            
            <input type="hidden" value="IVZ8ORGT8lkDGtPP892wzLzw" name="list">
            
            <fieldset class="col-md-2 submit">
              <label for="submit">Submit form</label>
              <input type="submit" value="sign" id="submit" name="submit">
            </fieldset>
          </form>
          <em><?php echo $action_text_4 ;?></em>
        </div>
      </section>
      <? } ?>
      
   </div>
<?php get_footer(); ?>