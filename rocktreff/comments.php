<div id="comments">
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'rocktreff' ); ?></p>
</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php if ( have_comments() ) : ?>
	<h2 id="comments-title"> Kommentare </h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
	<nav id="comment-nav-above">
		<h1 class="assistive-text"><?php _e( 'Comment navigation', 'rocktreff' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'rocktreff' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'rocktreff' ) ); ?></div>
	</nav>
	<?php endif; // check for comment navigation ?>

	<ol class="commentlist">
		<?php
			/* Loop through and list the comments. Tell wp_list_comments()
			 * to use rocktreff_comment() to format the comments.
			 * If you want to overload this in a child theme then you can
			 * define rocktreff_comment() and that will be used instead.
			 * See rocktreff_comment() in rocktreff/functions.php for more.
			 */
			//wp_list_comments( array( 'callback' => 'rocktreff_comment' ) );
			wp_list_comments(
				array(
				'avatar_size' => 47,
				'reply_text' => 'Antworten'
			));
		?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
	<nav id="comment-nav-below">
		<h1 class="assistive-text"><?php _e( 'Comment navigation', 'rocktreff' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'rocktreff' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'rocktreff' ) ); ?></div>
	</nav>
	<?php endif; // check for comment navigation ?>

<?php
	/* If there are no comments and comments are closed, let's leave a little note, shall we?
	 * But we don't want the note on pages or post types that do not support comments.
	 */
	elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'rocktreff' ); ?></p>
<?php endif; ?>

<?php comment_form(); ?>

</div>
