<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
      <div id="content" role="main">
        <?php get_template_part('loops/home-content'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col">Contact info</div>
		</div>
		
	</div>
	
</section>

<?php get_footer(); ?>
