<?php
//Declare Vars
$comment_send = 'Send';
$comment_reply = 'Leave a Message';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';
 
$comment_before = 'Registration isn\'t required.';
 
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<p class="comment-form-author "><br /><input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
        //Email Field
        'email' => '<p class="comment-form-email "><br /><input id="email" class="form-control" name="email" placeholder="' . $comment_email .'"></input></p>',
        //URL Field
        'url' => '<p class="comment-form-url "><br /><input id="url" class="form-control" name="url" placeholder="' . $comment_url .'"></input></p>',
        //Cookies
        'cookies' => '<input type="checkbox" class="form-check-input mb-3" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><br /><textarea class="form-control" id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
    //Message Before Comment
    'comment_notes_before' => __( $comment_before),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
    'class_submit'=>__('submit btn btn-primary form-control')
);
$args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => false,   // @since 3.6
    'echo'              => true     // boolean, default is true
);
?>
<ul class="commentlist">
<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
</ul>
<?php
comment_form( $comments_args );