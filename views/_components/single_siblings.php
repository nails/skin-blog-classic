<?php

echo '<hr>';
echo '<div class="siblings clearfix">';

if (!empty($post->siblings->next)) {
    echo anchor($post->siblings->next->url, 'Next ' . ucfirst($postName) . ' &rsaquo;', 'class="pull-right"');
}

if (!empty($post->siblings->prev)) {
    echo anchor($post->siblings->prev->url, '&lsaquo; Previous ' . ucfirst($postName));
}

echo '</div>';
