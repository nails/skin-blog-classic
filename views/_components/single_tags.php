<?php

    echo '<ul class="tags list-inline list-unstyled">';

        echo '<li class="title">Tags:</li>';

        foreach ($post->tags as $tag) {

            echo '<li class="tag">';
                echo '<span class="badge">' . anchor($tag->url, $tag->label) . '</span>';
            echo '</li>';
        }

    echo '</ul>';