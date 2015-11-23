<?php

//  Post Title
$skinLoadView('_components/single_title');

// --------------------------------------------------------------------------

//  Post Featured Image
if ($post->type === 'PHOTO' && !empty($post->photo->id)) {

    $skinLoadView('_components/single_type_photo');

} elseif ($post->type === 'VIDEO' && !empty($post->video->id)) {

    $skinLoadView('_components/single_type_video');

} elseif ($post->type === 'AUDIO' && !empty($post->audio->id)) {

    $skinLoadView('_components/single_type_audio');
}

// --------------------------------------------------------------------------

//  Post Gallery
if ($post->gallery) {

    $skinLoadView('_components/single_gallery');
}

// --------------------------------------------------------------------------

//  Post Body
$skinLoadView('_components/single_body');

// --------------------------------------------------------------------------

//  Post Social Tools
if (appSetting('social_enabled', 'blog-' . $blog->id)) {

    $skinLoadView('_components/single_social');
}

// --------------------------------------------------------------------------

//  Categories & Tags
if ((appSetting('categories_enabled', 'blog-' . $blog->id) && $post->categories) || (appSetting('tags_enabled', 'blog-' . $blog->id) && $post->tags)) {

    echo '<hr />';
}

if (appSetting('categories_enabled', 'blog-' . $blog->id) && $post->categories) {

    $skinLoadView('_components/single_categories');
}

if (appSetting('tags_enabled', 'blog-' . $blog->id) && $post->tags) {

    $skinLoadView('_components/single_tags');
}

// --------------------------------------------------------------------------

//  Associated content
if (!empty($post->associations)) {

    $skinLoadView('_components/single_associations');
}

// --------------------------------------------------------------------------

//  Post Siblings
if (!empty($post->siblings->next) || !empty($post->siblings->prev)) {

    $skinLoadView('_components/single_siblings');
}

// --------------------------------------------------------------------------

//  Post comments
if (appSetting('comments_enabled', 'blog-' . $blog->id) && $post->comments_enabled) {

    $skinLoadView('_components/single_comments');
}
