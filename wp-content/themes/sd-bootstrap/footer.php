<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer class="footer">
	    <div class="container text-center">
	        <small class="text-muted text-center">&copy; <?php echo date('Y'); ?> EY <?php echo bloginfo('name'); ?>.</small>
	    </div>
	</footer>


</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>