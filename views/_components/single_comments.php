<?php

    switch (app_setting('comments_engine', 'blog-' . $blog_id)) {

        case 'NATIVE':

            $this->load->view( $skin->path . 'views/_components/single_comments_native' );
            break;

        case 'DISQUS':

            $this->load->view( $skin->path . 'views/_components/single_comments_disqus' );
            break;


    }
