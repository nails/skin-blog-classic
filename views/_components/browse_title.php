<?php

	echo '<h2 class="title">' . anchor( $post->url, $post->title ) . '</h2>';
	echo '<p class="date-author">';
		echo 'Published ' . user_datetime( $post->published ) . ', ';
		echo 'by ' . $post->author->first_name . ' ' . $post->author->last_name;
	echo '</p>';