/**
 * Created by Nagaev Nikita on 16.08.2015.
 */
// first set the body to hide and show everyhthing when fully loaded ;)
jQuery(document).ready(function(){

    // the search widget
    jQuery( 'form.search-form').addClass( 'form-inline' );
    jQuery( 'input.search-field' ).addClass( 'form-control' );
    jQuery( 'input.search-submit' ).addClass( 'btn btn-default' );

    // here for each comment reply link of WordPress
    jQuery( '.comment-reply-link' ).addClass( 'btn btn-sm btn-default' );

    // here for the submit button of the comment reply form
    jQuery( '#submit, button[type=submit], button, html input[type=button], input[type=reset], input[type=submit]' ).addClass( 'btn btn-default' );

    // Now we'll add some classes for the WordPress default widgets - let's go
    jQuery( '.widget_rss ul' ).addClass( 'media-list' );

    // Add Bootstrap style for drop-downs
    jQuery( '.postform' ).addClass( 'form-control' );

    // Add Bootstrap styling for tables
    jQuery( 'table#wp-calendar' ).addClass( 'table table-striped');

    jQuery( '#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar' ).show( "fast" );
});

// jQuery powered scroll to top
jQuery(document).ready(function(){

    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 50) {
            jQuery('.scroll-to-top').fadeIn();
        } else {
            jQuery('.scroll-to-top').fadeOut();
        }
    });

    //Click event to scroll to top
    jQuery('.scroll-to-top').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });
});