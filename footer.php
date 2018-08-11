			    </div><!-- .main-loop -->
    			<?php get_sidebar(); ?>
            </div><!-- .main-content -->
            <footer class="main-footer">
                <a href="<?php echo esc_url( __( 'https://wordpress.org', 'wpcourse' ) ); ?>">
                    <?php printf( esc_html__( 'Proudly powered by %s', 'wpcourse' ), 'WordPress' ); ?>
                </a>
            </footer>
        </div><!-- .main-wrapper -->
        <?php wp_footer(); ?>
	</body>
</html>
