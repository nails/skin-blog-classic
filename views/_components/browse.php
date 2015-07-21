<?php

    //  Post Featured Image
    if ($post->type === 'PHOTO' && !empty($post->photo->id)) {

        echo '<div class="img featured-image col-md-3 text-center">';
            $this->load->view($skin->path . 'views/_components/browse_type_photo');
        echo '</div>';

        echo '<div class="col-md-9">';

    } else if ($post->type === 'VIDEO' && !empty($post->video->id)) {

        echo '<div class="img featured-video col-md-3 text-center">';
            $this->load->view($skin->path . 'views/_components/browse_type_video');
        echo '</div>';

        echo '<div class="col-md-9">';

    } else if ($post->type === 'AUDIO' && !empty($post->audio->id)) {

        echo '<div class="img featured-audio col-md-3 text-center">';
            $this->load->view($skin->path . 'views/_components/browse_type_audio');
        echo '</div>';

        echo '<div class="col-md-9">';
    }

    // --------------------------------------------------------------------------

    //  Post Title
    $this->load->view($skin->path . 'views/_components/browse_title');

    // --------------------------------------------------------------------------

    //  Post Excerpt, or Post Body
    if (isset($post->body)) {

        $this->load->view($skin->path . 'views/_components/browse_body');

    } else {

        $this->load->view($skin->path . 'views/_components/browse_excerpt');
    }

    // --------------------------------------------------------------------------

    echo '<hr />';

    if ($post->type === 'PHOTO' && !empty($post->photo->id)) {

        echo '</div>';

    } else if ($post->type === 'VIDEO' && !empty($post->video->id)) {

        echo '</div>';

    } else if ($post->type === 'AUDIO' && !empty($post->audio->id)) {

        echo '</div>';
    }
