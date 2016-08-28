<?php
    /* Support for the Twenty Fifteen theme */
    $style = '
	    .page-template-builder-fullwidth-std .site {
            max-width: 100%;
			overflow: hidden;
        }		
		.page-template-builder-fullwidth-std .site-footer {
            width: 70%;
			margin-left: 30%;
        }
	';
	wp_add_inline_style( 'twentyfifteen-style', $style );