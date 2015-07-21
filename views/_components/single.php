<?php

    //  Post Title
    $this->load->view($skin->path . 'views/_components/single_title');

    // --------------------------------------------------------------------------

    //  Post Featured Image
    if ($post->type === 'PHOTO' && !empty($post->photo->id)) {

        $this->load->view($skin->path . 'views/_components/single_type_photo');

    } else if ($post->type === 'VIDEO' && !empty($post->video->id)) {

        $this->load->view($skin->path . 'views/_components/single_type_video');

    } else if ($post->type === 'AUDIO' && !empty($post->audio->id)) {

        $this->load->view($skin->path . 'views/_components/single_type_audio');
    }

    // --------------------------------------------------------------------------

    //  Post Gallery
    if ($post->gallery) {

        $this->load->view($skin->path . 'views/_components/single_gallery');
    }

    // --------------------------------------------------------------------------

    //  Post Body
    $this->load->view($skin->path . 'views/_components/single_body');

    // --------------------------------------------------------------------------

    //  Post Social Tools
    if (app_setting('social_enabled', 'blog-' . $blog->id)) {

        $this->load->view($skin->path . 'views/_components/single_social');
    }

    // --------------------------------------------------------------------------

    //  Categories & Tags
    if ((app_setting('categories_enabled', 'blog-' . $blog->id) && $post->categories) || (app_setting('tags_enabled', 'blog-' . $blog->id) && $post->tags)) {

        echo '<hr />';
    }

    if (app_setting('categories_enabled', 'blog-' . $blog->id) && $post->categories) {

        $this->load->view($skin->path . 'views/_components/single_categories');
    }

    if (app_setting('tags_enabled', 'blog-' . $blog->id) && $post->tags) {

        $this->load->view($skin->path . 'views/_components/single_tags');
    }

    // --------------------------------------------------------------------------

    //  Associated content
    if (!empty($post->associations)) {

        $this->load->view($skin->path . 'views/_components/single_associations');
    }

    // --------------------------------------------------------------------------

    //  Post comments
    if (app_setting('comments_enabled', 'blog-' . $blog->id) && $post->commentsEnabled) {

        $this->load->view($skin->path . 'views/_components/single_comments');
    }
