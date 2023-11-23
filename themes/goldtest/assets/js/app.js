$(document).ready(function () {

    /**
     * Scroll top on form submission
     */
    // $(document).on('ajaxUpdate', function (context, data, textStatus, jqXHR) {
    //     if (data.handler === 'onSendContact') {
    //         window.scrollTo(0, 0);
    //     }
    // });

    /**
     * Form validation
     */
    $(window).on('ajaxInvalidField', function (event, field, fieldName, fieldMessages, isFirst) {

        var $form = $(field).closest('form');

        if (isFirst) {
            $('.invalid-feedback:not([data-validate-for])').remove();
            $form.find('[data-validate-for]').html('');
            $form.find('.is-invalid').removeClass('is-invalid');
        }

        if (field.type !== 'checkbox') {
            $(field).addClass('is-invalid');
        }

        var $validationContainer = $form.find('[data-validate-for="' + fieldName + '"]');

        if ($validationContainer.length === 1) {
            $validationContainer.addClass('invalid-feedback').html(fieldMessages[0]);

            return;
        }

        var $label = $form.find('label[for="' + fieldName + '"]');

        if ($label.length === 1) {
            $('<div class="invalid-feedback">' + fieldMessages[0] + '</div>').insertBefore($label);

            return;
        }

        $('<div class="invalid-feedback">' + fieldMessages[0] + '</div>').insertAfter($(field));
    });

    $(document).on('ajaxPromise', '[data-request]', function () {
        var $form = $(this).closest('form');
        $form.find('.is-invalid').removeClass('is-invalid');
        $form.find('.invalid-feedback:not([data-validate-for])').remove();
        $form.find('[data-validate-for]').html('');
    });

    /**
     * Fixed header
     */
    fixHeaderOnScroll();

    $(window).scroll(function () {
        fixHeaderOnScroll();
    });

    function fixHeaderOnScroll() {
        if ($(window).scrollTop() < 100) {
            $('body').removeClass('scrolled');
        } else {
            $('body').addClass('scrolled');
        }
    }


    /**
     * Home sectors mobile
     */
    $(function () {
        if (!$('body').hasClass('layout-home')) {
            return;
        }

        var $parallaxFirst = $('.parallax__first');

        $(window).scroll(function () {
            var scrollPosition = window.scrollY;
            var backgroundYPosPercent = 50 + (scrollPosition / 20);

            backgroundYPosPercent = (backgroundYPosPercent > 80) ? 80 : backgroundYPosPercent;

            $parallaxFirst.css(
                'background-position', `center ${backgroundYPosPercent}%`
            );
        });
    });
});
