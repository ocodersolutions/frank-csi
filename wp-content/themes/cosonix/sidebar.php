            <!--Right Sidebar-->
			<?php if ( is_active_sidebar( 'fthemes_sidebar' ) ) { ?>
            <div class="col-md-3">
                <div class="sidebar">
                    <!--widget area-->
                    <?php dynamic_sidebar( 'fthemes_sidebar' ); ?>
                    <!--End widget area-->
                </div>
            </div>
			<?php } ?>
            <!--End Right Sidebar-->