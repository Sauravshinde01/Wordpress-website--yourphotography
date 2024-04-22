<?php
/**
 * Title: Popular Category
 * Slug: featured/popular-category
 * Categories: featured
 */
$pluginsList = get_option( 'active_plugins' );
$market_boost_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $market_boost_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--60);padding-right:25px;padding-left:25px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--40);font-size:35px"><?php echo esc_html__( 'Popular Category', 'market-boost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Chic Timekeeping Companion', 'market-boost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3px"} -->
<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"main-category"} -->
<div class="wp-block-columns main-category"><!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:woocommerce/featured-category {"editMode":false,"mediaId":2152,"mediaSrc":"#","categoryId":33} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:woocommerce/featured-category {"editMode":false,"mediaId":2152,"mediaSrc":"#","categoryId":33} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:woocommerce/featured-category {"editMode":false,"mediaId":2130,"mediaSrc":"#","categoryId":36,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } else {?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"25px","left":"25px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:25px;padding-left:25px"><!-- wp:spacer {"height":"68px"} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"35px"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:35px"><?php echo esc_html__( 'Popular Category', 'market-boost' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Chic Timekeeping Companion', 'market-boost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3px"} -->
<div style="height:3px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"main-category"} -->
<div class="wp-block-columns main-category"><!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-1.jpg","id":2487,"dimRatio":50,"layout":{"type":"default"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2487" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"White Constant"} -->
<h3 class="wp-block-heading has-text-align-center has-white-constant-color has-text-color"><?php echo esc_html__( 'Classic Collection', 'market-boost' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-2.jpg","id":2488,"dimRatio":50,"layout":{"type":"default"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2488" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"White Constant"} -->
<h3 class="wp-block-heading has-text-align-center has-white-constant-color has-text-color"><strong><?php echo esc_html__( 'Sporty Chronographs', 'market-boost' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"cursor popular-category"} -->
<div class="wp-block-column cursor popular-category"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-3.jpg","id":2489,"dimRatio":50,"layout":{"type":"default"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2489" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"White Constant"} -->
<h3 class="wp-block-heading has-text-align-center has-white-constant-color has-text-color"><strong><?php echo esc_html__( 'Elegant Timepieces', 'market-boost' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Shop now', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->


<?php } ?>