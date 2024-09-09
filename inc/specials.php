<?php 

    $post_id = get_the_ID(); // or you can specify a post ID directly

    // Retrieve the serialized data from the post meta
    $data = get_post_meta($post_id, 'promo', true);

    // Unserialize the data


    // Check if unserialization was successful
if ($data && is_array($data)) {
    // Access individual values
    $title = isset($data['text_uqeycw0cd5d']) ? esc_html($data['text_uqeycw0cd5d']) : '';
    $content = isset($data['content']) ? wp_kses_post($data['content']) : '';
    $button_text = isset($data['button_text']) ? esc_html($data['button_text']) : '';
    $button_url = isset($data['button_url']) ? esc_url($data['button_url']) : '';

   ?>
        <section id="promo" class="container">
            <div class="main">
                <div>
                    <h2><?php echo  $title  ?></h2>
                    <div>
                    <?php echo  $content  ?>
                    </div>
                </div>
                <a href="<?php echo  $button_url  ?>" class="button-light"><?php echo  $button_text  ?></a>
            </div>
        </section>
   <?php
}

?>