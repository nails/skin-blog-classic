<?php

    //  This is a simple list of thumbnails with a fancybox gallery
    echo '<div class="gallery row">';

    foreach ($post->gallery as $slide) {

        echo '<div class="col-sm-3 col-xs-4" style="margin-bottom:1.25em;">';

            echo '<a href="' . cdn_serve($slide->image_id) . '" target="_blank" class="fancybox" data-fancybox-group="blog-post-gallery">';
                echo img(array(
                    'src' => cdn_thumb($slide->image_id, 500, 500),
                    'class' => 'img-responsive center-block thumbnail',
                    'width' => 500,
                    'height' => 500
                ));
            echo '</a>';

        echo '</div>';
    }

    echo '</div>';

    echo '<hr />';