<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:wfw="http://wellformedweb.org/CommentAPI/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    >
    <channel>
        <title><?=htmlspecialchars($blog->label)?></title>
        <atom:link href="<?=$blog->url . '/rss'?>" rel="self" type="application/rss+xml" />
        <link><?=site_url()?></link>
        <description><?=htmlspecialchars($blog->description)?></description>
        <lastBuildDate>Sun, 13 Apr 2014 19:49:30 +0000</lastBuildDate>
        <language>en-UK</language>
            <sy:updatePeriod>hourly</sy:updatePeriod>
            <sy:updateFrequency>1</sy:updateFrequency>
        <generator>http://nailsapp.co.uk</generator>
        <?php

        foreach ($posts as $post) {

            ?>
            <item>
                <title><?=htmlspecialchars($post->title)?></title>
                <link><?=$post->url?></link>
                <guid isPermaLink="false"><?=$blog->url . '?id=' . $post->id?></guid>
                <?=appSetting('comments_enabled', 'blog-' . $blog->id) ? '<comments>' . $post->url . '#comments</comments>' : ''?>
                <pubDate><?=date('r', strtotime($post->published))?></pubDate>
                <dc:creator><?=htmlspecialchars($post->author->first_name . ' ' . $post->author->last_name)?></dc:creator>
                <description><![CDATA[<?=$post->excerpt?>]]></description>
                <content:encoded><![CDATA[<?php

                    if ($post->type === 'PHOTO' && $post->photo->id) {

                        echo '<p>' . img(cdnServe($post->photo->id)) . '</p<name />';

                    } else if ($post->type === 'VIDEO' && $post->video->id) {

                        switch ($post->video->type) {
                            case 'YOUTUBE':
                                echo '<iframe width="500" height="281" src="https://www.youtube.com/embed/' . $post->video->id . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                                break;

                            case 'VIMEO':
                                echo '<iframe src="https://player.vimeo.com/video/' . $post->video->id . '" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                                break;
                        }

                    } else if ($post->type === 'AUDIO' && $post->audio->id) {

                        switch ($post->audio->type) {
                            case 'SPOTIFY':
                                echo '<iframe src="https://embed.spotify.com/?uri=spotify:track:' . $post->audio->id . '" width="500" height="80" frameborder="0" allowtransparency="true"></iframe>';
                                break;
                        }
                    }

                    echo $post->body;

                ?>]]></content:encoded>
            </item>
            <?php
        }
    ?>
    </channel>
</rss>