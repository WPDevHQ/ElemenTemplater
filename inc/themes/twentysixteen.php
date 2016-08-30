<?php
    /* Support for the Twenty Sixteen theme */
    $style = '	    
		.page-template-builder-fullwidth .elementor,
        .page-template-builder-fullwidth-std .elementor {
	        overflow: hidden;
        }
		.page-template-builder-fullwidth .full-width,
        .page-template-builder-fullwidth-std .full-width {
	        width: 100%;
        }
        .page-template-builder-fullwidth .site-inner,
        .page-template-builder-fullwidth-std .site-inner {
            max-width: 100%;
        }
        .page-template-builder-fullwidth .site-content,
        .page-template-builder-fullwidth-std .site-content {
            padding: 0;
        }
        .page-template-builder-fullwidth header#masthead,
        .page-template-builder-fullwidth footer#colophon,
        .page-template-builder-fullwidth-std header#masthead,
        .page-template-builder-fullwidth-std footer#colophon {
	        margin: 0 auto;
	        max-width: 1320px;
        } 
        .page-template-builder-fullwidth .entry-content,
        .page-template-builder-fullwidth-std .entry-content {
	        margin-right: auto;
	        margin-left: auto;
        }
        @media screen and (min-width: 56.875em) {
	        .page-template-builder-fullwidth .entry-content,
            .page-template-builder-fullwidth-std .entry-content	{
	            margin-right: auto;
	            margin-left: auto;
	        }
        }
        @media screen and (min-width: 44.375em) {	        
			.page-template-builder-fullwidth .entry-content,
            .page-template-builder-fullwidth-std .entry-content {
	            margin-right: auto;;
	        }
        }
	';
	wp_add_inline_style( 'twentysixteen-style', $style );