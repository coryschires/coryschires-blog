// A tiny plugin to swap default text (e.g. 'username') in text fields.
// By Cory Schires (http://coryschires.com)

(function($) {

	$.swap_value = {
		defaults: {
			normal_color: '#333333',
			default_color: '#B9B9B9'
		}		
	}

    $.fn.extend({
        swap_value: function() {
            
            var config = $.extend({}, $.swap_value.defaults, config);

            return this.each(function() {
                var text_field = $(this),
                    swap_value = text_field.attr('swap_value'),
                    input_value = text_field.val();

                var field_blank = function(input) {
                    var value = $.trim( input.val() );
                    return value === '' || value === swap_value;
                };

                // on page load
                if (field_blank(text_field)) {
                    text_field.val(swap_value);
                    text_field.css('color', config.default_color);
                };
                
                // on focus and blur

                text_field.focus(function(){
                    if (field_blank(text_field)) {
                        text_field.val("");
                        text_field.css('color', config.normal_color);
                    };
                });

                text_field.blur(function(){
                    if (field_blank(text_field)) {                        
                        text_field.val(swap_value);
                        text_field.css('color', config.default_color);
                    };                    
                });

            })
        }
    })
})(jQuery);