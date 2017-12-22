<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Correct Lite
 */
get_header(); ?>
<?php
$hideslide = get_theme_mod('hide_slides', 1);
?>
<?php if (!is_home() && is_front_page()) { ?>
<?php if( $hideslide == '') { ?>
<!-- Slider Section -->
<?php
$pages = array();
for($sld=10; $sld<13; $sld++) {
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $pages[] = $mod;
    }
}
if( !empty($pages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $pages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
	$sld = 10;
?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $correct_lite_slideno[] = $i;
          $correct_lite_slidetitle[] = get_the_title();
		  $correct_lite_slidedesc[] = get_the_excerpt();
          $correct_lite_slidelink[] = get_permalink();
          ?>

          <img src="<?php echo esc_url( get_option( 'a003_homepage_slider_image' ) ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no_slide.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
        $sld++;
        endwhile;
          ?>
    </div>
        <?php
        $k = 0;
        foreach( $correct_lite_slideno as $correct_lite_sln ){ ?>
    <div id="slidecaption<?php echo esc_attr( $correct_lite_sln ); ?>" class="nivo-html-caption">
      <div class="slide_info">
        <h2><?php echo esc_html( get_option( 'a003_homepage_slider_heading' ) ); ?></h2>
        <p><?php echo esc_html( get_option( 'a003_homepage_slider_subheading' ) ); ?></p>
        <div class="clear"></div>
        <?php $slide_button = get_theme_mod('slide_button'); ?>
        <?php if (!empty($slide_button)){  ?>
        <?php } ?>
      </div>
    </div>
 	<?php $k++;
       wp_reset_postdata();
      } ?>
<?php endif; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php } } ?>
<?php wp_reset_postdata(); ?>
<div class="clear"></div>
<section id="pagearea">
  <div class="container">
		
		<div class="center-title">
			<h2 style="color:#282828"><?php echo esc_html( get_option( 'a003_icon_section_title' ) ); ?></h2>
			<span style="border-bottom-color:#e8e7e7"></span>
		</div>
		
      <a href="<?php echo esc_url( get_option( 'a003_about_icon_url_1' ) ); ?>">
			<div class="resourcebox">
			<div class="resourceboxbg">
				<div class="resourcebox-icon"><i class="fa <?php echo esc_html( get_option( 'a003_about_icon_1' ) ); ?>"></i></div>
				<h6><?php echo esc_html( get_option( 'a003_about_icon_title_1' ) ); ?></h6>
				<p><?php echo esc_textarea( get_option( 'a003_about_icon_text_1' ) ); ?></p>
			</div>
			</div>
			</a>
			
			<a href="<?php echo esc_url( get_option( 'a003_about_icon_url_2' ) ); ?>">
			<div class="resourcebox">
			<div class="resourceboxbg">
				<div class="resourcebox-icon"><i class="fa <?php echo esc_html( get_option( 'a003_about_icon_2' ) ); ?>"></i></div>
				<h6><?php echo esc_html( get_option( 'a003_about_icon_title_2' ) ); ?></h6>
				<p><?php echo esc_textarea( get_option( 'a003_about_icon_text_2' ) ); ?></p>
			</div>
			</div>
			</a>
			
			<a href="<?php echo esc_url( get_option( 'a003_about_icon_url_3' ) ); ?>">
			<div class="resourcebox">
			<div class="resourceboxbg">
				<div class="resourcebox-icon"><i class="fa <?php echo esc_html( get_option( 'a003_about_icon_3' ) ); ?>"></i></div>
				<h6><?php echo esc_html( get_option( 'a003_about_icon_title_3' ) ); ?></h6>
				<p><?php echo esc_textarea( get_option( 'a003_about_icon_text_3' ) ); ?></p>
			</div>
			</div>
			</a>
			
			<a href="<?php echo esc_url( get_option( 'a003_about_icon_url_4' ) ); ?>">
			<div class="resourcebox">
			<div class="resourceboxbg">
				<div class="resourcebox-icon"><i class="fa <?php echo esc_html( get_option( 'a003_about_icon_4' ) ); ?>"></i></div>
				<h6><?php echo esc_html( get_option( 'a003_about_icon_title_4' ) ); ?></h6>
				<p><?php echo esc_textarea( get_option( 'a003_about_icon_text_4' ) ); ?></p>
			</div>
			</div>
			</a>
			
      <div class="clear"></div>
  </div><!-- container -->
</section><!-- #pagearea -->

<div class="a003-cta">
	<div class="container">
		<div class="a003-cta-left">
			<h3><?php echo esc_html( get_option( 'a003_cta_text_1' ) ); ?></h3>
		</div>
		<div class="a003-cta-right">
		<a class="a003-cta-button" href="<?php echo esc_url( get_option( 'a003_cta_url_1' ) ); ?>" title="#"><?php echo esc_html( get_option( 'a003_cta_btn_text_1' ) ); ?></a>
		</div>
	</div>
	<div class="clear"></div>
</div>

<?php wp_reset_postdata(); ?>
<?php if (!is_home() && is_front_page()) { ?>
<?php $hidepagefourboxes = get_theme_mod('hide_pagefourboxes', 1); ?>
<?php if( $hidepagefourboxes == '') { ?>
<section class="home2_section_area home2_section_area_bg">
    	<div class="center">
            <div class="home_section2_content">
                    <div class="serviceboxarea">
					<?php for($q=5; $q<9; $q++) { ?>
                    <?php if( get_theme_mod('sec2-page-column'.$q,false)) { ?>
                    <?php $querypagefourboxes = new WP_query('page_id='.get_theme_mod('sec2-page-column'.$q,true)); ?>
                    <?php while( $querypagefourboxes->have_posts() ) : $querypagefourboxes->the_post(); ?>
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <div class="servicebox boxpattern-1">
                    <div class="serviceboxbg"><?php if( has_post_thumbnail() ) { ?><?php the_post_thumbnail();?><?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <div class="ptgo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/go-arrow.png" alt="" /></div>
                    </div>
                    </div>
                    </a>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php }} ?>
		</div></div>
        </div>
    </section>
<?php } ?>
<?php } ?>

<?php get_footer(); ?>
