<?php

echo anchor(
    $post->url,
    img(
        array(
            'src' => cdnScale($post->photo->id, 300, 300),
            'class' => 'thumbnail img-responsive center-block'
        )
    )
);
