<?php

switch ($post->audio->type) {

    case 'SPOTIFY':

        echo '<iframe src="https://embed.spotify.com/?uri=spotify:track:' . $post->audio->id . '" width="100%" height="330" frameborder="0" allowtransparency="true"></iframe>';
        break;
}
