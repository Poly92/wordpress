<?php	/*Template Name: Page without sidebar*/?><?php 	global $SMTheme;	get_header(); ?><div id='content'>	<div class='container clearfix'> 		<div class="main_content">		<?php get_template_part('theloop'); ?>        		<?php comments_template(); ?>		        <?php get_template_part('navigation'); ?>        </div>	</div></div><?php get_footer(); ?>