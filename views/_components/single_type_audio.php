<div class="row">
    <div class="col-md-12">
    <?php

    switch ($post->audio->type) {

        case 'SPOTIFY':

            echo '<iframe src="https://embed.spotify.com/?uri=spotify:track:' . $post->audio->id . '" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>';
            break;
    }

    ?>
    <hr />
    </div>
</div>
