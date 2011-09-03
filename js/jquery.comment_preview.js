(function($) {

	$.comment_preview = {
		defaults: {
		    preview_btn: '#preview',
		    preview_wrapper: '#comment_preview',
		    name: 'input#author',
		    email: 'input#email',
		    website: 'input#url',
		    message: 'textarea#comment'
		}
	}

    $.fn.extend({
        comment_preview: function(config) {

            var config = $.extend({}, $.comment_preview.defaults, config);

            return this.each(function() {
                
                var comment_form = $(this);
                    preview_btn = $(config.preview_btn, comment_form),
                    preview_wrapper = $(config.preview_wrapper),
                    preview_showing = false;

                var perserve_linebreaks = function(text) {
                    var html = text.replace(/\r\n\r\n/g, "</p><p>"),
                        html = html.replace(/\r\n/g, "<br />"),
                        html = html.replace(/\n\n/g, "</p><p>"),
                        html = html.replace(/\n/g, "<br />"),
                        html = "<p>"+html+"</p>";  
                    return html
                };

                var todays_date = function() {

                    var month_in_words = function(month_num) {
                        if (month_num == 0) { return "January" };
                        if (month_num == 1) { return "February" };
                        if (month_num == 2) { return "March" };
                        if (month_num == 3) { return "April" };
                        if (month_num == 4) { return "May" };
                        if (month_num == 5) { return "June" };
                        if (month_num == 6) { return "July" };
                        if (month_num == 7) { return "August" };
                        if (month_num == 8) { return "September" };
                        if (month_num == 9) { return "October" };
                        if (month_num == 10) { return "November" };
                        if (month_num == 11) { return "December" };
                    };

                    var date = new Date(),
                        day = date.getDate(),
                        month = month_in_words( date.getMonth() ),
                        year = date.getFullYear();

                    return month +" "+ day +", "+ year;
                };
                
                var build_comment_markup = function(spec) {
                    var clear = '<div class="clear"></div>',
                        message = perserve_linebreaks(spec.message),
                        date = '<p class="comment_date">'+ todays_date() +'</p>',
                        author = '<cite><a href="'+ spec.website +'">'+ spec.name +'</a></cite>';

                    return '<ul id="comments_list"><li><hr/>'+ message + date + author + clear + '</li></ul>'
                }

                var refresh_preview = function() {
                    var form_data = {
                        name: comment_form.find(config.name).val(),
                        email: comment_form.find(config.email).val(),
                        website: comment_form.find(config.url).val(),
                        message: comment_form.find(config.message).val()
                    };

                    preview_wrapper.html(build_comment_markup(form_data));
                };
                
                // keep the preview in sync when showing
                $('input, textarea', comment_form).keyup(function() {
                    if (preview_showing) { refresh_preview(); }
                });

                // toggle hide/show preview when preview btn clicked
                preview_btn.click(function() {
                    preview_showing ? preview_wrapper.html('') : refresh_preview();
                    preview_showing = !preview_showing;
                    return false;
                });
                
            })
        }
    })

})(jQuery);