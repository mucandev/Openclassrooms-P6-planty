<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div>
</div>



<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();
?>
 </div>
        <footer id="footer" role="contentinfo">
            <a href='#'> Mentions légales</a>
        </footer>
    </div>
	
</body>
</html>
