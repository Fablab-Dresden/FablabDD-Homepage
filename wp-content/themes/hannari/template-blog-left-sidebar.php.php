<?php 
/**
 * Template Name: Blog: Left Sidebar
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage left_sidebar">
					 <?php get_sidebar();  ?>
					 <div class="pagecontent listpage">
					    <?php get_template_part( 'content-post'); ?>
					 </div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>