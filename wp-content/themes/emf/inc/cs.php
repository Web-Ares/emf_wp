<?php



add_filter( 'comment_form_default_fields', 'wpsites_comment_form_fields' );

function wpsites_comment_form_fields( $fields ) {

    unset($fields['url']);

    $fields['company'] = '<p class="comment-form-company"><label for="company">' . __( 'Company' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
        '<input id="company" name="company" ' . ( $html5 ? 'type="company"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_company'] ) . '" size="30"' . $aria_req . ' /></p>';


    $fields['company'] =  '<div class="site__field site__field_width1"><label for="company">' . __( 'COMPANY' ) . '</label> '.

                               '<input id="company" class="site__input" name="company" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>';


    return $fields;
}




//* Save Custom Comment Form Field Meta Data
add_action( 'comment_post', 'save_custom_comment_field_data', 10, 1 );
function save_custom_comment_field_data( $comment_id ) {

    if ( ( isset( $_POST['company'] ) ) && ( $_POST['company'] != '') )
        $company = wp_filter_nohtml_kses($_POST['company']);
    add_comment_meta( $comment_id, 'company', $company );


    if ( ( isset( $_POST['title'] ) ) && ( $_POST['title'] != '') )
        $title = wp_filter_nohtml_kses($_POST['title']);
    add_comment_meta( $comment_id, 'title', $title );


}






add_action('load-edit-comments.php', 'add_custom_fields_to_edit_comment_screen');
function add_custom_fields_to_edit_comment_screen() {
    $screen = get_current_screen();
    add_filter("manage_{$screen->id}_columns", 'add_custom_comment_columns');
}
function add_custom_comment_columns($cols) {
    $cols['company'] = __('Company', 'wpsites');
    return $cols;
}
add_action( 'manage_comments_custom_column', 'custom_title_column', 10, 2 );
function custom_title_column($col, $comment_id) {

    switch($col) {
        case 'title':
            if($tit = get_comment_meta($comment_id, 'title', true)){
                echo esc_html($tit);
            } else {
                esc_html_e('No Title Submitted', 'wpsites');
            }
    }
}
add_action( 'manage_comments_custom_column', 'custom_company_column', 10, 2 );
function custom_company_column($col, $comment_id) {

    switch($col) {
        case 'company':
            if($ind = get_comment_meta($comment_id, 'company', true)){
                echo esc_html($ind);
            } else {
                esc_html_e('No company Submitted', 'wpsites');
            }
    }
}



add_filter( 'comment_text', 'output_company_field_data_comment_form');
function output_company_field_data_comment_form( $text ){
    if( $company = get_comment_meta( get_comment_ID(), 'company', true ) ) {
        $company = '<strong>' . esc_attr( $company ) . '</strong><br/>';
        $text = $company . $text;
        return $text;
    }
}

add_action( 'add_meta_boxes_comment', 'comment_add_meta_box' );
function comment_add_meta_box()
{
    add_meta_box( 'my-comment-title', __( 'Company Field' ), 'comment_meta_box_age',     'comment', 'normal', 'high' );
}

function comment_meta_box_age( $comment )
{
    $title = get_comment_meta( $comment->comment_ID, 'company_cur', true );

    ?>
    <p>
        <label for="company_cur"><?php _e( 'Company' ); ?></label>
        <input type="text" name="company_cur" value="<?php echo esc_attr( $title ); ?>"  class="widefat" />
    </p>
    <?php
}
add_action( 'comment_post', 'comment_edit_function' );
function comment_edit_function( $comment_id )
{

        update_comment_meta( $comment_id, 'company_cur',  $_POST['company']);

}
add_action( 'edit_comment', 'comment_edit_function_1' );
function comment_edit_function_1( $comment_id )
{

    if(isset($_POST['company_cur']))
        update_comment_meta( $comment_id, 'company',  $_POST['company_cur'] );
        update_comment_meta( $comment_id, 'company_cur',  $_POST['company_cur'] );

}
