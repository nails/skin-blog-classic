<?php

switch (appSetting('comments_engine', 'blog-' . $blog->id)) {

    case 'NATIVE':

        $skinLoadView('_components/single_comments_native');
        break;

    case 'DISQUS':

        $skinLoadView('_components/single_comments_disqus');
        break;


}
