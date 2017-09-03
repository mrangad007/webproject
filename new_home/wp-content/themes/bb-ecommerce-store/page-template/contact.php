<?php
/**
 * Template Name: Contact
 */

get_header(); ?>

<div id="content-tc" class="container">
    <div class="middle-align">	
		<div class="col-md-4 contact-info">
			<h3><?php echo esc_html_e('FIND US HERE','bb-ecommerce-store'); ?></h3>
			<div class="contact-location">
				<span class="head"><?php echo esc_html_e('LOCATION','bb-ecommerce-store'); ?></span> <br>
 					<?php echo esc_html( get_theme_mod('bb_ecommerce_store_our_address','') ); ?>
 			</div>	
			<div class="contact-call">
				<span class="head"><?php echo esc_html_e('SUPPORT CALL','bb-ecommerce-store'); ?></span> <br>
					<?php echo esc_html( get_theme_mod('bb_ecommerce_store_contact','') ); ?>
			</div>			
			<div class="contact-email">
				<span class="head"><?php echo esc_html_e('EMAIL ADDRESS','bb-ecommerce-store'); ?></span> <br>
				<?php echo esc_html( get_theme_mod('bb_ecommerce_store_email','') ); ?>
			</div>
		</div>       
		<div class="col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
                <?php the_content();
                
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bb-ecommerce-store' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );

				?>                
            <?php endwhile; // end of the loop. ?>          
        </div>        
        <div class="clear"></div>    
	</div>
</div>
<?php get_footer(); ?>