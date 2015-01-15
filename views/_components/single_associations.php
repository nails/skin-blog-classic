<?php

	foreach ( $post->associations as $index => $assoc ) :

		if ( ! empty( $assoc->current ) ) :

			echo '<ul class="associations association-' . $index . ' list-inline list-unstyled">';

				echo '<li class="title">' . $assoc->widget->label . ':</li>';

					if ( isset( $assoc->widget->callback_batch ) && is_callable( $assoc->widget->callback_batch ) ) :

						echo call_user_func( $assoc->widget->callback_batch, $assoc->current );

					else :

						foreach ( $assoc->current as $item_index => $current ) :

							/**
							 * If a callback has been defined and is callable then use that,
							 * otherwise a simple text label will do nicely
							 */

							echo '<li class="item-id-' . $item_index . '">';

								if ( isset( $assoc->widget->callback ) && is_callable( $assoc->widget->callback ) ) :

									$_out = call_user_func( $assoc->widget->callback, $current->id, $current->label, $item_index );

								else :

									$_out = $current->label;

								endif;

								echo '<span class="badge">' . $_out . '</span>';

							echo '</li>';

						endforeach;

					endif;

				echo '</li>';

			echo '</ul>';

		endif;

	endforeach;

