<?php
/**
 * Footer template (footer.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
?>

<footer>

 <a href="/" class="bottom-logo"><img src="<?php echo get_template_directory_uri();?>/img/ninty-rock-logo.png" width="134" height="117" alt=""/></a>

 <div class="footer-contacts">
  <h2>CONTACT</h2>
  <p><?php the_field('contact', 'option'); ?></p>
 </div>


<?php if( have_rows('social_icons', 'option') ): ?>

 <div class="footer-social">

  <?php while( have_rows('social_icons', 'option') ): the_row(); ?>

        <a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('image'); ?>" width="48" height="47" alt=""/></a>

  <?php endwhile; ?>

 </div>

 <?php endif; ?>


 <p class="footer-copy">&copy; <?php the_field('copyright', 'option'); ?></p>

</footer>

<?php wp_footer(); // necessary for work plugins and functionality wp ?>

<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>

</body>
</html>