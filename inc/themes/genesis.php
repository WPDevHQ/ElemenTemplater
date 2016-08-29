<?php
    /* Support for the Genesis theme */
    $genesis = '
		.page-template-builder-fullwidth,
		.page-template-builder-fullwidth-std {
            max-width: 100%;
            padding: 0;
			margin: 0;			
        }
		.page-template-builder-fullwidth .elementor,
		.page-template-builder-fullwidth-std .site-inner {
            padding-top: 0;
			max-width: 100%;
            overflow: hidden;			
        }
		@media only screen and (max-width: 860px) {
			.page-template-builder-fullwidth-std .site-inner {
				padding: 0;				
			}
		}
	';
	wp_add_inline_style( 'elementor-frontend', $genesis );