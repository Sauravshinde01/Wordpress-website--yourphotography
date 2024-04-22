<?php
/**
 * Title: Winter Products
 * Slug: featured/winter-products
 * Categories: featured
 */
$pluginsList = get_option( 'active_plugins' );
$market_boost_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $market_boost_plugin , $pluginsList);
if ( $results )  {
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:25px;padding-bottom:0;padding-left:25px"><!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"65px","bottom":"30px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-bottom:30px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Arctic Frost Series', 'market-boost' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"fontSize":"very-small"} -->
<p class="has-very-small-font-size"><?php echo esc_html__( 'This is text This is text word preferences and the procedures of the fundamental things applies to somehow nothing word preferences and the procedures of the fundamental things applies to somehow nothingword preferences and the procedures of the fundamental things applies to somehow nothing', 'market-boost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"default"},"fontFamily":"jost"} -->
<div class="wp-block-group has-jost-font-family" style="padding-top:15px;font-style:normal;font-weight:500"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"400px"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"left"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":6,"isLink":true,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /-->

<!-- wp:spacer {"height":"1px"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"45px"} -->
<div style="height:45px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } else{ ?>
   <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:25px;padding-bottom:0;padding-left:25px"><!-- wp:spacer {"height":"35px"} -->
<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"65px","bottom":"30px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:65px;padding-bottom:30px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"35px"}}} -->
<h3 class="wp-block-heading" style="font-size:35px"><?php echo esc_html__( 'Arctic Frost Series', 'market-boost' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"fontSize":"very-small"} -->
<p class="has-very-small-font-size"><?php echo esc_html__( 'This is text This is text word preferences and the procedures of the fundamental things applies to somehow nothing word preferences and the procedures of the fundamental things applies to somehow nothingword preferences and the procedures of the fundamental things applies to somehow nothing', 'market-boost' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:image {"id":2489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-3.jpg" alt="" class="wp-image-2489"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"25px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
<h4 class="wp-block-heading has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Frostbrite Fusioni', 'market-boost' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$133', 'market-boost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Add to Cart', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:image {"id":2488,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-2.jpg" alt="" class="wp-image-2488"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"25px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
<h4 class="wp-block-heading has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Alpine Majesty', 'market-boost' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$133', 'market-boost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Add to Cart', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:image {"id":2487,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/category-1.jpg" alt="" class="wp-image-2487"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"25px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
<h4 class="wp-block-heading has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Midnight Blizzard', 'market-boost' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$133', 'market-boost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Add to Cart', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|60"}}},"backgroundColor":"base-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:image {"id":2461,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/banner-inside.jpg" alt="" class="wp-image-2461"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"25px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
<h4 class="wp-block-heading has-text-align-center has-normal-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Polar Horizon Precision', 'market-boost' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '$133', 'market-boost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html__( 'Add to Cart', 'market-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"39px"} -->
<div style="height:39px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
    
<?php }?>