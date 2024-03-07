$(document).ready(function () {
    $('body').on('change', '.discount-condition-repeat-select-trigger select', function () {
        var all_selected = [$(this).val()];
        $('.discount-condition-repeat-select-trigger select').each(function () {
            if ($(this).val() != '') {
                all_selected.push($(this).val());
            }
        });
        $('.discount-condition-repeat-select-trigger select').each(function () {
            var selected = $(this).val();
            $(this).find('option-').each(function () {
                $(this).replaceWith(this.outerHTML.replace(/option-/g, "option"));
            });
            $(this).find('option').each(function () {
                if (all_selected.includes($(this).val()) && $(this).val() != selected && $(this).val() != '') {
                    $(this).replaceWith(this.outerHTML.replace(/option/g, "option-"));
                }
            });
        });
    })
})