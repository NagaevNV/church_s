<?php

/**
 * Created by PhpStorm.
 * User: nagaevnv
 * Date: 17.08.15
 * Time: 12:46
 */
function church_grid($input)
{
    if ($input=='content-area') {
        if ( ! is_active_sidebar( 'sidebar-1' ) ) {
            echo "content-area col-xs-12 col-md-10 col-md-offset-1";
        }
        else {
            echo "content-area col-xs-12 col-md-8";
        }
    }
}
?>