<div class="row">
    <div class="col-md-12">
    <?php

        echo '<a href="' . cdn_serve($post->photo->id) . '" class="fancybox" target="_blank">';
            echo img(array(
                'src' => cdn_scale($post->photo->id, 1000, 1000),
                'class' => 'img-responsive center-block thumbnail'
            ));
        echo '</a>';

    ?>
    <hr />
    </div>
</div>
