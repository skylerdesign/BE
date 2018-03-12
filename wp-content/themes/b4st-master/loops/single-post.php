<?php
/*
The Single Posts Loop
=====================
*/
?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
      <h1>
        <?php the_title()?>
      </h1>
      <p class="mb-0">
        <em>
          <span class="text-muted author"><?php _e('By', 'b4st'); echo " "; the_author() ?>,</span>
          <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
        </em>
      </p>
      <p class="text-muted" style="margin-bottom: 30px;">
        <i class="fa fa-folder-open"></i>&nbsp;
        <?php _e('Filed under', 'b4st'); ?>:
        <?php the_category(', ') ?><br/>
        <i class="fa fa-comment"></i>&nbsp;
        <?php _e('Comments', 'b4st'); ?>:
        <?php comments_popup_link(__('None', 'b4st'), '1', '%'); ?>
      </p>
    </header>
    <main>
      <?php the_post_thumbnail(); ?>
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>
  </article>
  <?php comments_template('/loops/comments.php'); ?>
  <?php endwhile; ?>
  <?php else: ?>
  <?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
  <?php endif; ?>
