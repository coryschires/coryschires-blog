$(document).ready(function() {

// STORE SOME USEFUL GLOBAL VARIABLES
var path_to_images = "url(http://coryschires.com/wp-content/themes/cs-simple/images/"
var path_to_theme = "url(http://coryschires.com/wp-content/themes/cs-simple/"

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

// STYLE FOR ORDERED LISTS IN POSTS
var block_numbers_for_ordered_lists = function() {
    $('.post ol.block_list').each(function() {
        var list = $(this),
            list_items = $('li', list);

        list_items.each(function(index) {
            $(this).prepend('<span class="number">'+ (index+1) +'</span>');
        });
    });
}();


// ADD COMMENT PREVIEWING
$('#commentform').comment_preview();

// AUTO-EXPANDING TEXTAREA ON COMMENT FORM
$('#commentform textarea').prettyComments();

// FORM VALIDATIONS
$("#commentform").validate();

$('#comments_list li code').each(function() {
    var code_element = $(this);
    var snippet = code_element.html().replace(/<br>/g, '').replace(/<p>/g, '').replace(/<\/p>/g, '');

    var code_block = '<div class="code_block"><pre class="brush: ruby;">'+ snippet +'</pre></div>'
    code_element.html(code_block);
});

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


}); // end of doc ready