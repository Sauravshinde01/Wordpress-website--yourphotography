<?php
/**
 * Title: Post
 * Slug: featured/post
 * Categories: featured
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"35px"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:35px"><?php echo esc_html__( 'Latest News', 'market-boost' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":14,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","bottom":"29px","left":"0px","top":"0"},"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"base-2","layout":{"inherit":false}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:var(--wp--preset--spacing--70);padding-top:0;padding-right:0px;padding-bottom:29px;padding-left:0px"><!-- wp:post-featured-image {"height":"250px","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"10px"}}},"layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category","textAlign":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.9"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->