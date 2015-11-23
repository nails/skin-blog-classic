<?php

//  Defaults
$layout      = '';
$singleTitle = appSetting('social_layout_single_text', 'blog-' . $blog->id) ? appSetting('social_layout_single_text', 'blog-' . $blog->id) : 'Share';
$counters    = appSetting('social_counters', 'blog-' . $blog->id) ? 'data-zeroes="yes"' : 'data-counters="no"';
$twitterVia  = appSetting('social_twitter_via', 'blog-' . $blog->id) ? 'data-via="' . appSetting('social_twitter_via', 'blog-' . $blog->id) . '"' : '';

// --------------------------------------------------------------------------

//  Layout
switch (appSetting('social_layout', 'blog-' . $blog->id)) {

    case 'HORIZONTAL':
        $layout = '';
        break;

    case 'VERTICAL':
        $layout = 'social-likes_vertical';
        break;

    case 'SINGLE':
        $layout = 'social-likes_single';
        break;
}

if ($post->type === 'PHOTO') {

    $iImageId = $post->photo->id;

} else {

    $iImageId = null;
}

$enabled   = array();
$enabled[] = appSetting('social_facebook_enabled', 'blog-' . $blog->id) ? '<div class="facebook" title="Share link on Facebook">Facebook</div>' : '';
$enabled[] = appSetting('social_twitter_enabled', 'blog-' . $blog->id) ? '<div class="twitter" ' . $twitterVia . ' title="Share link on Twitter">Twitter</div>' : '';
$enabled[] = appSetting('social_googleplus_enabled', 'blog-' . $blog->id) ? '<div class="plusone" title="Share link on Google+">Google+</div>' : '';
$enabled[] = appSetting('social_pinterest_enabled', 'blog-' . $blog->id) && $iImageId ? '<div class="pinterest" data-media="' . cdnServe($iImageId) . '" title="Share image on Pinterest">Pinterest</div>' : '';

$enabled = array_filter($enabled);

if ($enabled) {

    echo '<hr />';
    echo '<div class="social-likes ' . $layout . '" ' . $counters . ' data-url="' . $post->url . '" data-single-title="' . $singleTitle . '" data-title="' . $post->title . '">';
    foreach ($enabled as $item) {

        echo $item;
    }
    echo '</div>';
}
