(function( jQuery ) {
 
    "use strict";
    jQuery(document).ready(function () { 
        let $ = jQuery;
        $('.timelinesliderwp').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            customPaging: function (slider, i) {
                let title = $(slider.$slides[i]).find('.timelinewpSlick').attr('data-title');
                return '<span class="dots__item">' + title + ' </span>';
            },
            dotsClass: 'timelineslider-dots'
        });
    
        function setPagination() {
            setTimeout(function () { 
                let pagi = $('ul.timelineslider-dots li.slick-active');
                let pagiNoneActive = $('ul.timelineslider-dots li');
        
                // Reset Attribute
                // pagiNoneActive.removeClass('prev-first', 'prev-second', 'next-first', 'next-second');
                pagiNoneActive.removeAttr('data-position');
                
                pagi.prev().attr('data-position', 'prev-first');
                pagi.prev().prev().attr('data-position', 'prev-second');
                pagi.next().attr('data-position', 'next-first');
                pagi.next().next().attr('data-position', 'next-second');
            }, 10)
        }
    
        setPagination();
    
        $(".timelinesliderwp").on("beforeChange", function (){
            setPagination()
        })
    })
 
})(jQuery);