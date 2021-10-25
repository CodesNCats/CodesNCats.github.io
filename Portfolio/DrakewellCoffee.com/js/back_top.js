// JavaScript Document
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('#back').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('#back').each(function () {
            $(this).removeClass('active');
			$('#back').css({
				opacity: '.0'
            });
        })
        $(this).addClass('active');
		
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+5
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#back').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#back').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}


$.fn.scrollBot = function() { 
  return $(document).height() - this.scrollTop() - this.height(); 
};


$.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
				opacity: '.4'
            });
        }else {
            $this.css({
				opacity: '0'
            });
        }
    });
};

$('#back').followTo(10);