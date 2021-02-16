
// Assign active class to nav links while scolling
$(window).scroll(function () {
    var scrollDistance = $(window).scrollTop();
    $('.page-section').each(function (i) {
        if ($(this).position().top <= scrollDistance) {
            $('.navigation a.active').removeClass('active');
            $('.navigation a').eq(i).addClass('active');
        }
    });
}).scroll();

// Assign affix class  while scolling
jQuery(function ($) {
    $(window).on('scroll', function (event) {
        var scrollValue = $(window).scrollTop();
        // to nav 
        if (scrollValue > 50) {
            $('.logo').addClass('affix');
        } else {
            $('.logo').removeClass('affix');
        }
        // to burgermenu 
        if (scrollValue > 50) {
            $('.burger').addClass('affix');
        } else {
            $('.burger').removeClass('affix');
        }
        // to page section 
        if (scrollValue > 300) {
            $('#mainNav').addClass('affix');
        } else {
            $('#mainNav').removeClass('affix');
        }
    });
});



// form_validation
$("#needs-validation").submit(function (event) {
    if (this.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    this.classList.add('was-validated');
});




$(document).ready(function () {

    var scrollLink = $('.scroll');

    // Smooth scrolling
    scrollLink.click(function (e) {
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    // Active link switching
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 300;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        })

    })

})