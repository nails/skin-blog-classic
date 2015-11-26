<div class="nails-skin-blog-classic browse<?=!empty($archive_title) ? ' archive' : ' non-archive'?> row">
    <?php

    echo '<ul class="posts col-md-9 col-md-push-3 list-unstyled">';

    // --------------------------------------------------------------------------

    //  Are we on an 'archive' page? i.e Categories, tags or associations
    if (!empty($archive_title)) {

        echo '<li class="archive-title">';
            $skinLoadView('_components/browse_archive_title');
        echo '</li>';
    }

    if (!empty($archive_description)) {

        echo '<li class="archive-description">';
            $skinLoadView('_components/browse_archive_description');
        echo '</li>';
    }

    // --------------------------------------------------------------------------

    //  Render Posts
    if ($posts) {

        foreach ($posts as $post) {

            echo '<li class="post clearfix">';
                $skinLoadView('_components/browse', array('post' => &$post));
            echo '</li>';
        }

    } else {

        echo '<li class="no-posts">';
            echo 'No Posts Found';
        echo '</li>';
    }

    // --------------------------------------------------------------------------

    //  Pagination
    $skinLoadView('_components/browse_pagination');

    echo '</ul>';

    // --------------------------------------------------------------------------

    //  Load Sidebar
    $skinLoadView('_components/sidebar');

    ?>
</div>
