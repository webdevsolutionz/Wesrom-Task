<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wesrom
 */

?>

 <!-- FOOTER START-->
    <footer>
        <div class="container">
            <ul>
                <li>
                    <h4>COMPANY</h4>
                </li>
                <?php if( have_rows('footer_menu_one', 'option') ): ?>
                	 <?php while( have_rows('footer_menu_one', 'option') ): the_row(); ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a></li>
			 <?php endwhile; ?>
				<?php endif; ?>
                
            </ul>
            <ul>
                <li>
                    <h4>DIVISIONS</h4>
                </li>
                 <?php if( have_rows('footer_menu_two', 'option') ): ?>
                	 <?php while( have_rows('footer_menu_two', 'option') ): the_row(); ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a></li>
			 <?php endwhile; ?>
				<?php endif; ?>
            </ul>
            <ul>
                <li>
                    <h4>UK OFFICE</h4>
                </li>
                <?php if( have_rows('footer_menu_three', 'option') ): ?>
                	 <?php while( have_rows('footer_menu_three', 'option') ): the_row(); ?>
                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a></li>
			 <?php endwhile; ?>
				<?php endif; ?>
            </ul>
            <ul>
                <li>
                    <h4>Follow us</h4>
                </li>
                <li>
                	 <?php if( have_rows('footer_menu_four', 'option') ): ?>
                	 	<?php while( have_rows('footer_menu_four', 'option') ): the_row(); ?>
                    <span>
                    	 
                        <a href="<?php the_sub_field('link'); ?>" target="_blank;"><?php the_sub_field('label'); ?></a>
                  
                    </span>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </footer>
    <!-- FOOTER END -->
</div>

<?php wp_footer(); ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
</html>
