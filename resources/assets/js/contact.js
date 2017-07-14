(function($) {
	"use strict";
	// Contact form valitation with jquery.validate plugin
	if ($.fn.validate) {
        var contactForm = $('#contact-form'),
            formBtn = contactForm.find('.btn');

        contactForm.validate({
            rules: {
                contactname: 'required',
                contactwebsite: {
                    required: true,
                    url: true
                },
                contactsubject: 'required',
                contactemail: {
                    required: true,
                    email: true
                },
                contactmessage: {
                    required: true,
                    minlength: 40
                }
            },
            messages: {
                contactname: "This field is required. Please enter your name.",
                contactwebsite: {
                    required: "This field is required. Please enter your website.",
                    email: "Please enter a valid url."
                },
                contactsubject: "This field is required. Please enter a subject.",
                contactemail: {
                    required: "This field is required. Please enter your email address.",
                    email: "Please enter a valid email address."
                },
                contactmessage: {
                    required: "This field is required. Please enter your message.",
                    minlength: "Your message must be at least 40 characters long."
                }
            },
            submitHandler: function (form) {
                $(document).ajaxStart(function() {
                    formBtn.button('loading');
                }).ajaxStop(function() {
                    formBtn.button('reset');
                });
                /* Ajax handler */
                $.ajax({
					type: 'post',
					url: 'assets/php/mail.php',
					data: $(form).serialize(),
				}).done(function( data ) {
					if ( data == 'success') {
						alert('Email has been sent successfully!')
					} else if ( data == 'already') {
						alert('You already sent a message. Please try again later');
					} else {
						alert('There is an error please try again later!');
					}
				}).error(function() {
					alert( 'There is an error please try again later!' );
				});
                return false;
            }
        });
    }
})(jQuery);