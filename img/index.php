<?php get_header(); ?>

<div class="wrapper">

  <aside>

   <a href="/" class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" width="291" height="20" alt=""/></a>
   <?php $args = array( // arguments to display top menu, menu must be created in admin panel for arguments working
            'theme_location' => 'top', // menu identificator, defined of register_nav_menus() function in function.php
            'container'=> 'nav', // parent tag of ul, false is nothing
            'menu_class' => 'menu', // class of ul
            'menu_id' => 'top-nav', // id attribute of ul
            );
            wp_nav_menu($args); // display top menu
    ?>


   <?php //get_sidebar(); // include sidebar.php ?>

  </aside>

  <main>
   <section class="properties-page">
	<?php if (have_posts()) : while (have_posts()) : the_post(); // if posts exist - start cycle ?>
		<h1><?php the_title(); ?></h1>
     <div class="propperties-slider">

     <div class="view"><?php the_post_thumbnail('full');?></div>

     <?php if(have_rows('images')) : ?>
      <?php while(have_rows('images')) : the_row(); ?>

        <div class="view"><img src="<?php the_sub_field('image');?>" width="900" height="611" alt=""/></div>

      <?php endwhile; ?>
    <?php endif; ?>

     </div>

     <?php the_content(); ?>

	<?php endwhile; // cycle end
	else: echo '<h2>Sorry, posts not found</h2>'; endif; // if posts not exist, show message ?>
	<?php pagination(); // show pagination, located in function.php ?>
</section>

  </main>

 </div>

<?php get_footer(); // include footer.php ?>