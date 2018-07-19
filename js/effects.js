(function ($) {
    "use strict";
    let elem, ink, d, x, y, $rippleGroup = $(".ripple-group"),
        $rippleAlone = $(".ripple-alone"),
        init_ripple = function () {
            $rippleGroup.on("click", function (e) {
                parent = $(this).parents(".ripple-group-parent");
                //create .ink element if it doesn't exist
                if (parent.find(".ink").length === 0) {
                    parent.append("<span class='ink'></span>");
                }
                ink = parent.find(".ink");
                //incase of quick double clicks stop the previous animation
                ink.removeClass("animate");
                //set size of .ink
                if (!ink.height() && !ink.width()) {
                    //use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
                    d = Math.max(parent.outerWidth(), parent.outerHeight());
                    ink.css({
                        height: d,
                        width: d
                    });
                }
                //get click coordinates
                //logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
                x = e.pageX - parent.offset().left - ink.width() / 2;
                y = e.pageY - parent.offset().top - ink.height() / 2;
                //set the position and add class .animate
                ink.css({
                    top: y + 'px',
                    left: x + 'px'
                }).addClass("animate");
            });
            //Ripple effect for single elements
            $rippleAlone.on("click", function (e) {
                elem = $(this);
                //create .ink element if it doesn't exist
                if (elem.find(".ink").length === 0) {
                    elem.append("<span class='ink'></span>");
                }
                ink = elem.find(".ink");
                //incase of quick double clicks stop the previous animation
                ink.removeClass("animate");
                //set size of .ink
                if (!ink.height() && !ink.width()) {
                    //use elem's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
                    d = Math.max(elem.outerWidth(), elem.outerHeight());
                    ink.css({
                        height: d,
                        width: d
                    });
                }
                //get click coordinates
                //logic = click coordinates relative to page - elem's position relative to page - half of self height/width to make it controllable from the center;
                x = e.pageX - elem.offset().left - ink.width() / 2;
                y = e.pageY - elem.offset().top - ink.height() / 2;
                //set the position and add class .animate
                ink.css({
                    top: y + 'px',
                    left: x + 'px'
                }).addClass("animate");
            });
        }
})(jQuery);