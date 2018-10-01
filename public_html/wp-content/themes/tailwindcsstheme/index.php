<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TailwindCSS_Theme
 * @since 1.0
 * @version 1.0
 */

get_header();

?>

<div id="conteudo">
	<div id="artigos">
		<div class="artigo">
			<h2>Titulo do artigo 1</h2>
			<p>Postado por administrador em 16/01/2012</p>
			<p>Conteudo do artigo</p>
		</div>

		<div class="artigo">
			<h2>Titulo do artigo 2</h2>
			<p>Postado por administrador em 16/01/2012</p>
			<p>Conteudo do artigo</p>
		</div>
	</div>

	<!--o código da sidebar ficava aqui-->
	<?php get_sidebar(); ?>
</div>

<?php

get_footer();

?>
