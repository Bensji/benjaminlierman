benj.formValidator =
    {
        init: function () {
            benj.formValidator.validateOnEnter();
        },

        validateOnEnter: function () {
            "use strict";

            let item = $('form.contact--form');
            let formFields = item.find('.uk-input');
            formFields.push(item.find('.uk-textarea'));
            let i = 0;
            let removeErrors = false;

            item.submit(function (e) {
                e.preventDefault();

                for (i; i <= formFields.length; i++) {
                    let currentItem = formFields[i];
                    if ($(currentItem)[0].value === "") {
                        $(currentItem).addClass('uk-form-danger');
                        $('#error--message').show();
                    }
                }

                removeErrors = true;
                return;
            });
        },

        removeErrors(e) {
            "use strict";

            if (e.hasClass('uk-form-danger')) {
                e.removeClass('uk-form-danger');
            }
            $('#error--message').hide();
        }
    };