<?php
/**
 *  Template Name: Portfolio Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
  * @subpackage yp-solution
 * @since yp-solution 1.0
 */

get_header();
?>

  <?php 
    $clientinfo = get_field('section_1_client_information');
    if( !empty( $clientinfo ) ): ?>
      <img src="<?php echo esc_url( $clientinfo['work_page_image']['url'] ); ?>" alt="<?php echo esc_attr( $clientinfo['work_page_image']['alt'] ); ?>" />
      <?php echo esc_attr( $clientinfo['services'] ); ?>
      <?php print the_title(); ?>
      
  <?php endif; ?>

<?php
get_footer();
