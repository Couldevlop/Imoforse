(function ($) {
    "use strict";
    /*==============================
     Is mobile
     ==============================*/
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }



    /* Coming Soon */
    CountDown();
    function CountDown() {
        if ($('#countdown').length) {

            var nextYear = new Date(new Date().getFullYear() + 1, 1 - 1, 26);
            $('#countdown').countdown(nextYear, function (event) {
                var $this = $(this).html(event.strftime(''
                    + '<div class="item"><span class="count">%D</span><span>Jours</span></div>'
                    + '<div class="item"><span class="count">%H</span><span>Heures</span></div>'
                    + '<div class="item"><span class="count">%M</span><span>Minutes</span></div>'
                    + '<div class="item"><span class="count">%S</span><span>Secondes</span></div>'));
            });
        }
    }

    CountDate();
    /*==========  Count Date ==========*/
    function CountDate() {
        if ($('.count-date').length) {
            $('.count-date').each(function (index, el) {
                var $this = $(this),
                    end_date = $this.attr('data-end');

                if ($this.attr('data-end') !== '' && typeof $this.attr('data-end') !== 'undefined') {

                    $this.countdown(end_date, function (event) {
                        $(this).html(
                            event.strftime('<span> %D <span>Days</span></span> <span> %H <span>HOURS</span></span> <span> %M <span>MINUTES</span></span> <span> %S <span>SECONDS</span></span>')
                        );
                    });

                }

            });
        }
    }


    /*Validate message*/
    if ($('#send-contact-form').length) {
        $('#send-contact-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: $.format("At least {0} characters required.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                subject: {
                    required: "Please enter your subject.",
                    minlength: $.format("At least {0} characters required.")
                },
                message: {
                    required: "Please enter a message.",
                    minlength: $.format("At least {0} characters required.")
                }
            },

            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    success: function (responseText, statusText, xhr, $form) {
                        $('#contact-content').slideUp(600, function () {
                            $('#send-contact-form input[type=text], #send-contact-form textarea').val('');
                            $('#contact-content').html(responseText).slideDown(600);
                        });
                    }
                });
                return false;
            }
        });
    }

})(jQuery);
