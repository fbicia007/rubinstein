/*
 *  Customized Jquery for Site.
 */

jQuery( document ).ready( function($) {

    // Add Fancybox to Default Gallery
    $( '.gallery' ).each( function() {
        $( this ).find( 'img' ).parent( 'a' ).addClass( 'fancybox' );
        $( this ).find( 'img' ).parent( 'a' ).attr( 'rel', $( this ).attr( 'id' ) );
    } );
    $( '.fancybox' ).fancybox();

    /* ---- Responsive Menu ---- */
    $( '.mob-menu a.select-menu' ).addClass( 'c-hide' );
    $( '.mob-menu a.select-menu' ).click( function() {
        $( '#nav-320' ).slideDown( 400 );
        $( this ).removeClass( 'c-hide' );
        $( this ).addClass( 'c-show' );
        return false;
    } );
    $( '#nav-320 a.close-menu' ).click( function() {
        $( '#nav-320' ).slideUp( 400 );
        $( this ).removeClass( 'c-show' );
        $( this ).addClass( 'c-hide' );
        return false;
    } );

    /* ---------------------- Contact Form 7 ---------------------- */
    var placeholder
    $( 'span.wpcf7-form-control-wrap .wpcf7-form-control' ).focusin( function() {
        $placeholder = $( this ).attr( 'placeholder' );
        $( this ).attr( 'placeholder', '' );
    } );
    $( 'span.wpcf7-form-control-wrap .wpcf7-form-control' ).focusout( function() {
        $( this ).attr( 'placeholder', $placeholder );
    } );
    $( 'span.wpcf7-form-control-wrap' ).on( 'hover', function() {
        $( this ).find( 'span.wpcf7-not-valid-tip' ).hide();
    } );

    /* ---------------------- Home Banner ---------------------- */
    var height = $(window).innerHeight()
    $( '.home-banner' ).css( 'height', height );

    /* ---------------------- Sticky Header ---------------------- */
    $( window ).scroll( function(){
        var sticky = $( ".sticky-header" );
        var headerHeight = $( '#header' ).height();
        var scrollTop = $( window ).scrollTop()+110;
        if ( scrollTop > headerHeight ) {
            if ( !sticky.hasClass( 'showing' ) ) {
                sticky.show();
                sticky.addClass( 'showing' );
                sticky.animate( { top: 0 }, 600 );
            }
        } else {
            if ( sticky.hasClass( 'showing' ) ) {
                sticky.removeClass( 'showing' );
                sticky.animate( { top: '-110px' }, 600 );
                setTimeout( function(){ sticky.hide() }, 600 );
            }
        }
    });

    /* ---------------------- Slider Arrows ---------------------- */
    if ( $( "#page_slider_count" ).length > 0 ) {
        var psc = document.getElementById('page_slider_count').value;
    }
    if ( psc > 2 ) {
        $( '.page-slider' ).hover( function() {
            $( '.page-slider-nav' ).show();
        }, function() {
            $( '.page-slider-nav' ).hide();
        } );
    }

    /* ---------------------- Foundation Query ---------------------- */
    $( document ).foundation();

} );

jQuery( window ).load( function() {
    /* Isotope */
    var $grid = jQuery('.teachers-list-area').isotope({
        itemSelector: '.teachers-list',
        layoutMode: 'fitRows'
    });
    var filters = {};
    jQuery('.inst-list').on( 'click', 'a', function() {
        jQuery( this ).parent().find('a').removeClass( 'active' );
        jQuery( this ).addClass( 'active' );
        var $this = jQuery(this);
        var $buttonGroup = $this.parents('.inst-list');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        if (filterGroup) {
            filters[ filterGroup ] = $this.attr('data-filter');
            var filterValue = concatValues( filters );
            $grid.isotope({ filter: filterValue });
        } else if (filterGroup = $buttonGroup.attr('data-filter-function')) {
            if (jQuery.isFunction(window[filterGroup])) {
                window[filterGroup] ($this.attr('data-filter'));
            }
        }
    });
} );

function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
        value += obj[ prop ];
    }
    return value;
}

jQuery.fn.almComplete = function(alm) {
    addthis.toolbox('.addthis_toolbox');
};


jQuery( window ).resize( function() {
    var height = jQuery(window).innerHeight()
    jQuery( '.home-banner' ).css( 'height', height );
} );

function my_value() {
    var value = document.getElementById( 'ctc-menu' ).value;
    jQuery( '.contact-form .wpcf7' ).slideUp( 450 );
    if ( value.toLowerCase().indexOf( 'pdf' ) > -1 ) {
        jQuery( '.success-msg.with-pdf' ).show( 450 );
    } else {
        jQuery( '.success-msg.without-pdf' ).show( 450 );
    }
}

/* ---- Google Map ACF ------ */
(function($) {

    function render_map( $el ) {
        var $markers = $el.find('.marker');
        var args = {
            zoom            : 17,
            center          : new google.maps.LatLng(0, 0),
            mapTypeId       : google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        var map = new google.maps.Map( $el[0], args);
        map.markers = [];
        $markers.each(function(){
            add_marker( $(this), map );
        });
        center_map( map );
    }

    function add_marker( $marker, map ) {
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
        var marker = new google.maps.Marker({
            position    : latlng,
            map         : map
        });
        map.markers.push( marker );
        if( $marker.html() ) {
            var infowindow = new google.maps.InfoWindow({
                content     : $marker.html()
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open( map, marker );
            });
            infowindow.open( map, marker );
        }
    }

    function center_map( map ) {
        var bounds = new google.maps.LatLngBounds();
        $.each( map.markers, function( i, marker ) {
            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
            bounds.extend( latlng );
        });
        if( map.markers.length == 1 ) {
            map.setCenter( bounds.getCenter() );
            map.setZoom( 17 );
        } else {
            map.fitBounds( bounds );
        }
    }

    $(document).ready(function(){
        $('.acf-map').each(function(){
            render_map( $(this) );
        });
    });

})(jQuery);