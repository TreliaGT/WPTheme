<?php 

    $post_id = get_the_ID(); // or you can specify a post ID directly

    // Retrieve the serialized data from the post meta
    $data = get_post_meta($post_id, 'group_6dtvh7ymzoy', true);

    // Check if unserialization was successful
if ($data && is_array($data)) {
   ?>
        <section id="grid" class="container-nopd light">
            <div class="grid-container">
                <?php 
                    foreach ($data as $item) {
                        if (isset($item['title']) && isset($item['content'])) {
                            echo '<div class="grid-item"> <a>';
                            echo '<h2 class="title">' . esc_html($item['title']) . '</h2>';
                            echo '<div class="content">' . esc_html($item['content']) . '</div>';
                            echo '</a></div>';
                        }
                    }
                ?>
            </div>
        </section>
   <?php
}

?>