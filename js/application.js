$(document).ready(function() {

// STORE SOME USEFUL GLOBAL VARIABLES
path_to_images = "url(http://coryschires.com/wp-content/themes/cs-simple/images/"
path_to_theme = "url(http://coryschires.com/wp-content/themes/cs-simple/"

// SYNTAX HIGHLIGHTING FOR CODE IN BLOG POSTS
SyntaxHighlighter.config.clipboardSwf = path_to_theme + 'syntax-highlighter/scripts/clipboard.swf';
SyntaxHighlighter.defaults['wrap-lines'] = false;
SyntaxHighlighter.defaults['toolbar'] = false;
SyntaxHighlighter.defaults['gutter'] = false;
SyntaxHighlighter.all();


// PRETTY PHOTO CONFIG FOR PORTFOLIO 
if ($.browser.msie&&$.browser.version<8.0) {
	$("a[rel^='prettyPhoto']").prettyPhoto( {
		default_width: 543,
		default_height: 420,
		allowresize: false,
		showTitle: false
	});		
} else {
	$("a[rel^='prettyPhoto']").prettyPhoto( {
		default_width: 543,
		default_height: 420,
		showTitle: false
	});	
};

// LIVE COMMENT PREVIEW
$('#commentform p#buttons #preview').click(function() {
    var preview_btn = $(this),
        preview_wrapper = $('#comment_preview'),
        comment_form = $('#commentform');
        
    var form_data = {
        name: comment_form.find('input#author').val(),
        email: comment_form.find('input#email').val(),
        website: comment_form.find('input#url').val(),
        message: comment_form.find('textarea#comment').val()
    };
    
    var perserve_linebreaks = function(text) {
        var html = text.replace(/\r\n\r\n/g, "</p><p>"),
            html = html.replace(/\r\n/g, "<br />"),
            html = html.replace(/\n\n/g, "</p><p>"),
            html = html.replace(/\n/g, "<br />"),
            html = "<p>"+html+"</p>";  
        return html
    };
    var todays_date = function() {
        var date = new Date(),
            day = date.getDate(),
            month = date.getMonth(),
            year = date.getFullYear();
            
        return month +" "+ day +", "+ year;
    };
    var build_comment_markup = function(spec) {
        var clear = '<div class="clear"></div>',
            message = perserve_linebreaks(spec.message),
            date = '<p class="comment_date">'+ todays_date() +'</p>',
            author = '<cite><a href="http://cory.com">'+ spec.name +'</a></cite>';

            //<a class="url" rel="external nofollow" href="http://cory.com">Cory Schires</a>
            
        return '<ul id="comments_list"><li><hr/>'+ message + date + author + clear + '</li></ul>'
    }
    
    preview_wrapper.html(build_comment_markup(form_data));
    return false;
});

// AUTO-EXPANDING TEXTAREA ON COMMENT FORM
$('#commentform textarea').prettyComments();


// FORCE CONFIG FOR NORMAL VIEW / HIRE ME FORM	
$("a[rel^='prettyPhoto']").click(function() {
	$('.pp_details').show();
	$('.pp_content').removeClass('short_lightbox')	
});	
$('a#hire_me_tab').click(function() {
	$('.pp_details').hide();
	$('.pp_content').addClass('short_lightbox');
});	


// HOVER MESSAGES FOR PORTFOLIO PREVIEW IMGS
$('img.msg').hover_caption({
	caption_font_size: '25px'
});
$('img.msg_small_font').hover_caption({
	caption_font_size: '22px'
});

// HACK TO MOVE ORIGINAL COMMENTS ABOVE COMMENT REPLIES IN THE MARKUP
$('.original_comment').each(function() {
    var metadata = $(this),
        metadata_markup = metadata.html(),
        reply_btn = metadata.parent().find('.thdrpy');
    
    if (reply_btn.length) {
        reply_btn.before(metadata_markup)
        metadata.remove();    
    };
});


// FORM VALIDATIONS
$("#commentform").validate();

// SHOW MORE LINKS IN SIDEBAR
$('p.see_more').click(function() {
	$('.see_more_wrap').toggle();
	$(this).hide();
	$('p.see_less').show();	
	return false;
});
$('p.see_less').click(function() {
	$('.see_more_wrap').toggle();
	$(this).hide();
	$('p.see_more').show();	
	return false;
});


// SELECTED STATE FOR MAIN NAV
current_page = document.location.href
if (current_page == "http://coryschires.com/" ) {
	$("#nav li a:eq(0)").addClass('selected');		
} else if (current_page.match(/portfolio/)) {
	$("#nav li a:eq(1)").addClass('selected');		
} else { // set blog as selected
	$("#nav li a:eq(2)").addClass('selected');
};

// SLIDESHOW FOR HOMEPAGE
function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
setInterval(slideSwitch, 5000);



// OPEN IN NEW WINDOW
$(function(){
    $('a.new_window').click(function(){
        window.open(this.href);
        return false;
	});
});


// DEFAULT SWAP VALUES FOR FORM FIELDS
$("input[swap_value], textarea[swap_value]").swap_value();


/*--------------------------------------------------------------------------------------------
	                                SCRIPTS FOR BLOG POSTS                    
--------------------------------------------------------------------------------------------*/

// quote rotator plugin post 
$('ul#quotes').quote_rotator();


}); // end of doc ready