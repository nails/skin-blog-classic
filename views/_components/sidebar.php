<ul class="sidebar col-md-3 col-md-pull-9 list-unstyled">
<?php

	if ( app_setting( 'sidebar_latest_posts', 'blog-' . $blog->id ) && ! empty( $widget->latest_posts ) ) :

		echo '<li class="widget latest-posts clearfix">';

			echo '<h3>Latest Posts</h3>';
			echo '<ul class="latest-posts">';
			foreach ( $widget->latest_posts as $item ) :

				echo '<li>';
					echo anchor( $item->url, $item->title );
					echo '<br />';
					echo '<small class="meta">';
						echo 'Published ' . toUserDatetime( $item->published );
					echo '</small>';
				echo '</li>';

			endforeach;
			echo '</ul>';
			echo '<hr />';

		echo '</li>';

	endif;

	// --------------------------------------------------------------------------

	if ( app_setting( 'categories_enabled', 'blog-' . $blog->id ) && app_setting( 'sidebar_categories', 'blog-' . $blog->id ) && ! empty( $widget->categories ) ) :

		echo '<li class="widget categories clearfix">';

			echo '<h3>Categories</h3>';
			echo '<ul class="categories">';
			foreach ( $widget->categories as $item ) :

				echo '<li>';
					echo anchor( $item->url, $item->label );
					echo $item->post_count ? ' (' . $item->post_count . ')' : '';
				echo '</li>';

			endforeach;
			echo '</ul>';
			echo '<hr />';

		echo '</li>';

	endif;

	// --------------------------------------------------------------------------

	if ( app_setting( 'tags_enabled', 'blog-' . $blog->id ) && app_setting( 'sidebar_tags', 'blog-' . $blog->id ) && ! empty( $widget->tags ) ) :

		echo '<li class="widget tags clearfix">';

			echo '<h3>Tags</h3>';
			echo '<ul class="tags">';
			foreach ( $widget->tags as $item ) :

				echo '<li>';
					echo anchor( $item->url, $item->label );
					echo $item->post_count ? ' (' . $item->post_count . ')' : '';
				echo '</li>';

			endforeach;
			echo '</ul>';
			echo '<hr />';

		echo '</li>';

	endif;

	// --------------------------------------------------------------------------

	//	Post associations
	if ( isset( $post->associations ) && $post->associations ) :

		foreach ( $post->associations as $assoc ) :

			if ( app_setting( 'sidebar_association_' . $assoc->slug, 'blog-' . $blog->id ) && ! empty( $assoc->current ) ) :

				echo '<li class="widget associations association-' . $assoc->slug . ' clearfix">';
				echo '<h3>' . $assoc->widget->title . '</h3>';

				echo '<ul>';
				foreach ( $assoc->current as $item_index => $current ) :

					//	If a callback has been defined and is callable then use that,
					//	otherwise a simple text label will do nicely

					echo '<li class="item-id-' . $item_index . '">';
					if ( isset( $assoc->widget->callback ) && is_callable( $assoc->widget->callback ) ) :

						echo call_user_func( $assoc->widget->callback, $current, $item_index );

					else :

						$current->label;

					endif;
					echo '</li>';

				endforeach;
				echo '</ul>';

				echo '<hr />';
				echo '</li>';

			endif;

		endforeach;

	endif;

	if ( app_setting( 'sidebar_popular_posts', 'blog-' . $blog->id ) && ! empty( $widget->popular_posts ) ) :

		echo '<li class="widget popular-posts clearfix">';

			echo '<h3>Popular Posts</h3>';
			echo '<ul class="popular-posts">';
			foreach ( $widget->popular_posts as $item ) :

				echo '<li>';
					echo anchor( $item->url, $item->title );
					echo '<br />';
					echo '<small class="meta">';
						echo 'Published ' . toUserDatetime( $item->published );
					echo '</small>';
				echo '</li>';

			endforeach;
			echo '</ul>';
			echo '<hr />';

		echo '</li>';

	endif;

	// --------------------------------------------------------------------------

	//	RSS
	if ( app_setting( 'rss_enabled', 'blog-' . $blog->id ) ) :

		echo '<li class="text-center">';
			echo anchor( app_setting( 'url', 'blog-' . $blog->id ) . 'rss', '<b class="fa fa-rss"></b> RSS', 'title="Subscribe via RSS"' );
		echo '<li>';

	endif;

?>
</ul>