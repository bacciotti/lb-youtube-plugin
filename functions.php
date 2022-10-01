// Add this shortcode in functions.php to get the video from media library instead of YT.

/**
 * Pegar o último vídeo da categoria videos-promocao
 */
function lbyt_shortcode_media()
{
	
	$posts = get_posts( array(
		'posts_per_page' => 1,
		'category'       => 8, // Id da categoria ofertas-dia
		'orderby'          => 'date',
		'order'            => 'DESC'
	) );
	
	return do_shortcode( $posts[0]->post_content );

}
add_shortcode('lbyt_shortcode_media', 'lbyt_shortcode_media');
