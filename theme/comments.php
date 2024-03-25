<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both
 * the current comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thestartutor
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$user = wp_get_current_user();
$comments = get_comments();

$comment_field = '<div class="comment-form-comment flex py-[24px] px-[24px] gap-[8px]">
<div style="background-image: url(' . esc_url( get_avatar_url( $user->ID )) . ')" class="w-[40px] h-[40px] bg-center bg-cover rounded-full"></div>
<input id="comment" name="comment" class="h-[40px] outline-none w-full bg-surface-secondary resize-none rounded-full indent-[10px]" placeholder="Write a comment" />
</div>';

?>

        <section class="w-full mt-[76px] px-[16px] md:px-[80px] lg:px-[40px] xl:px-[200px] 2xl:px-[418px">
            <h2 class="text-heading2 font-heading2">Comments (<?php echo get_comments_number(); ?>)</h2>
            <?php comment_form(
                array(
                    "fields" => array(
                        "author" => "",
                        "email" => "",
                        "url" => "",
                        "cookies" => "",
                    ),
                    "title_reply" => "",
                    "logged_in_as" => "",
                    'comment_field' => $comment_field,
                )
            ); ?>
            <hr>
            <?php wp_list_comments(
                array(
                    'style' => 'div',
                    'callback' => 'thestartutor_list_comments',
                )
            ); ?>
            <hr>
        </section>