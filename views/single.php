<div class="nails-blog-skin-classic single row">
<?php

    echo '<ul class="posts col-md-9 col-md-push-3 list-unstyled">';

        echo '<li class="post clearfix">';
            $this->load->view($skin->path . 'views/_components/single');
        echo '</li>';

    echo '</ul>';

    $this->load->view($skin->path . 'views/_components/sidebar');

?>
</div>