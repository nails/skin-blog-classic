<?php

echo '<h2 class="title">' . $post->title . '</h2>';

if ($post->is_published) {

    echo '<p class="date-author">';
        echo 'Published ' . toUserDatetime($post->published). ', ';
        echo 'by ' . $post->author->first_name . ' ' . $post->author->last_name;
    echo '</p>';

} else {

    echo '<p class="not-published alert alert-warning">';
        echo 'This post has not yet been published.';
    echo '</p>';
}
