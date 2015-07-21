<?php

    echo '<div class="excerpt">';
        echo $post->excerpt;
    echo '</div>';
    echo '<p class="meta">';
        echo anchor($post->url, 'Read More', 'class="read-more btn btn-sm btn-primary"');
    echo '</p>';
