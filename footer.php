<footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id'        => 'footer-menu',
                ));
                ?>
            </nav>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
