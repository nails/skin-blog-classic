<div class="row">
    <div class="col-md-12">
    <?php

        echo '<a href="' . cdn_serve($post->image_id) . '" class="fancybox" target="_blank">';
            echo img(array(
                'src' => cdn_thumb($post->image_id, 1100, 500),
                'class' => 'img-responsive center-block thumbnail'
            ));
        echo '</a>';

    ?>
    </div>
</div>