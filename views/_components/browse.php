<?php

    //  Post Featured Image
    if ($post->image_id) {

        echo '<div class="img featured-image col-md-3 text-center">';
            $this->load->view($skin->path . 'views/_components/browse_featured_image');
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

    if ($post->image_id) {

        echo '</div>';
    }
