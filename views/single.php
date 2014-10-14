<div class="nails-blog-skin-classic single row">
<?php

	echo '<ul class="posts ' . BS_COL_MD_9 . ' ' . BS_COL_MD_PUSH_3 . ' list-unstyled">';

		echo '<li class="post clearfix">';
			$this->load->view( $skin->path . 'views/_components/single' );
		echo '</li>';

	echo '</ul>';

	$this->load->view( $skin->path . 'views/_components/sidebar' );

?>
</div>