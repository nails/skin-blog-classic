<div class="row">
    <div class="col-md-12">
    <?php

    switch ($post->video->type) {

        case 'YOUTUBE':

            echo '<iframe width="100%" height="476" src="https://www.youtube.com/embed/' . $post->video->id . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
            break;

        case 'VIMEO':

            echo '<iframe src="https://player.vimeo.com/video/' . $post->video->id . '" width="100%" height="476" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
            break;
    }

    ?>
    <hr />
    </div>
</div>
