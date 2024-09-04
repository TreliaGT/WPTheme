<?php 

    $post_id = get_the_ID(); // or you can specify a post ID directly

    // Retrieve the serialized data from the post meta
    $data = get_post_meta($post_id, 'subscribe', true);

    // Check if unserialization was successful
if ($data && is_array($data)) {
    $title = isset($data['title']) ? esc_html($data['title']) : '';
    $content = isset($data['content']) ? wp_kses_post($data['content']) : '';
    $button_text = isset($data['button_text']) ? esc_html($data['button_text']) : '';
    $button_url = isset($data['button_url']) ? esc_url($data['button_url']) : '';
   ?>
        <section id="subscribe" class="container">
            <div>
                <div class="content">
                <h2><?php echo  $title  ?></h2>
                    <div>
                    <?php echo    $content  ?>
                    </div>
                    <a href="<?php echo  $button_url  ?>" class="button-light"><?php echo  $button_text  ?></a>
                </div>
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="7b6a1fe"]'); ?>
                </div>
            </div>
        </section>
   <?php
}

?>