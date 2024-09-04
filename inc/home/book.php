<?php 

    $post_id = get_the_ID(); // or you can specify a post ID directly

    // Retrieve the serialized data from the post meta
    $data = get_post_meta($post_id, 'book', true);

    // Check if unserialization was successful
if ($data && is_array($data)) {
   ?>
        <section id="book" class="container">
            <div>
                <?php 
                    foreach ($data as $item) {
                        if (isset($item['title']) && isset($item['content'])) {
                            $button_text = isset($item['button_text']) ? esc_html($item['button_text']) : '';
                            $button_url = isset($item['button_url']) ? esc_url($item['button_url']) : '';

                            echo '<div class="page">';
                            echo '<h2 class="title">' . esc_html($item['title']) . '</h2>';
                            echo '<div class="content">' . esc_html($item['content']) . '</div>';
                            echo '<a class="button-light" href="'.  $button_url .'">' .  $button_text . '</a>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </section>
   <?php
}

?>