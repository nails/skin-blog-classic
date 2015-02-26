<?php

    //  Defaults
    $layout      = '';
    $singleTitle = app_setting('social_layout_single_text', 'blog-' . $blog->id) ? app_setting('social_layout_single_text', 'blog-' . $blog->id) : 'Share';
    $counters    = app_setting('socialcounters', 'blog-' . $blog->id) ? 'data-zeroes="yes"' : 'data-counters="no"';
    $twitterVia  = app_setting('socialtwitterVia', 'blog-' . $blog->id) ? app_setting('socialtwitterVia', 'blog-' . $blog->id) : '';

    // --------------------------------------------------------------------------

    //  Layout
    switch (app_setting('social_layout', 'blog-' . $blog->id)) {

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

    $enabled   = array();
    $enabled[] = app_setting('social_facebook_enabled', 'blog-' . $blog->id) ? '<div class="facebook" title="Share link on Facebook">Facebook</div>' : '';
    $enabled[] = app_setting('social_twitter_enabled', 'blog-' . $blog->id) ? '<div class="twitter" data-via="' . $twitterVia . '" title="Share link on Twitter">Twitter</div>' : '';
    $enabled[] = app_setting('social_googleplus_enabled', 'blog-' . $blog->id) ? '<div class="plusone" title="Share link on Google+">Google+</div>' : '';
    $enabled[] = app_setting('social_pinterest_enabled', 'blog-' . $blog->id) && $post->image_id ? '<div class="pinterest" data-media="' . cdn_serve($post->image_id) . '" title="Share image on Pinterest">Pinterest</div>' : '';

    $enabled = array_filter($enabled);

    if ($enabled) {

        echo '<hr />';
        echo '<div class="social-likes ' . $layout . '" ' . $counters . ' data-url="' . $post->url . '" data-single-title="' . $singleTitle . '" data-title="' . $post->title . '">';
        foreach ($enabled as $item) {

            echo $item;
        }
        echo '</div>';
    }
