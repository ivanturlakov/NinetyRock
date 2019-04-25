<?php
/*
 Template Name: Contact
*/

get_header(); ?>

<?php if ( have_posts() ) : the_post(); // cycle start ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <section class="banner">
     <?php the_post_thumbnail('full');?>
     <div class="banner-text no-bg right">
      <h1><?php the_field('header_title'); // header title ?></h1>
      <p><?php the_field('header_description'); ?></p>
     </div>
    </section>

    <section>
     <div class="wrapper sub-page">
      <h2 class="page-subtitle contact"><?php the_field('body_title');?></h2>
     </div>
    </section>

    <section class="pattern">
      <div class="wrapper sub-page">
        <div class="contact-form">

          <?php echo do_shortcode('[gravityform id=2]'); ?>

      </div>
     </div>
    </section>

    <section class="banner no-bord banner-offices">
     <img src="http://ninetyrock.devserv.co/wp-content/uploads/2016/06/offices-banner.jpg" width="1200" height="590" alt=""/>
     <div class="banner-text no-bg offices">
      <h2>OFFICES</h2>
     </div>
    </section>

    <section>
     <div class="wrapper sub-page head-office">
      <div class="office-address">
       <h2 class="page-subtitle blue">Corporate Office</h2>
       <p><span>Ninety Rock LLC</span><br />
          1580 Jefferson Rd.<br />
          Rochester, NY 14623.</p>
       <p>Phone: <a href="tel:9173537483">(917) 353-7483</a><br />
          Email: <a href="mailto:info@Ninetyrock.com">info@Ninetyrock.com</a></p>
      </div>
      <div class="office-map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2913.805775830025!2d-77.5855230842354!3d43.08757849683812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d14a931f97af37%3A0x5fb5f5e33099febb!2sTim+Hortons!5e0!3m2!1sru!2sua!4v1466175642513" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
     </div>
    </section>

    <?php //the_content(); // post content ?>

  </article>

 <?php endif; ?>


<?php get_footer(); // include footer.php ?>