<?php
/**
 * Title: Header New
 * Slug: featured/header-new
 * Categories: featured
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:group {"style":{"spacing":{"blockGap":"3px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":1.5,"fontSize":"12px","letterSpacing":"0px"},"spacing":{"padding":{"top":"0.63rem","bottom":"0.63rem"}}},"textColor":"White Constant"} -->
<p class="has-text-align-center has-white-constant-color has-text-color" style="padding-top:0.63rem;padding-bottom:0.63rem;font-size:12px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.5"><?php echo esc_html__( 'SUMMER SALE FOR ALL SWIM SUITS AND FREE EXPREE INTERNATIONAL DELIVERY - OFF 50%!', 'market-boost' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"textColor":"White Constant","className":"header-paragraph-white"} -->
<p class="header-paragraph-white has-white-constant-color has-text-color" style="font-size:12px;font-style:normal;font-weight:600;line-height:1.5"><a href="#"><?php echo esc_html__( 'SHOP NOW', 'market-boost' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"20px","left":"20px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"className":"block-header","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group block-header" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"38px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"15px"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-left:15px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":240,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","query":{"post_type":"product"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"13px"},"border":{"radius":"0px"}},"className":"market-boost-search-products"} /-->
<?php
$pluginsList = get_option( 'active_plugins' );
$market_boost_plugin = 'woocommerce/woocommerce.php';
$results = in_array( $market_boost_plugin , $pluginsList);
if ( $results )  { ?>
<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon"} /-->

<!-- wp:woocommerce/mini-cart /-->
<?php } ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

