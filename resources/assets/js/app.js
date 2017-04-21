/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('pikaday');
require('pikaday/plugins/pikaday.jquery');

require('jquery-validation/dist/localization/messages_de.js');
require('jquery-validation');

jQuery(function() {
    $(document).foundation();

    $('form').each(function() {
        $(this).validate({});
    });

    $('.datepicker').pikaday({
        i18n: {
            previousMonth : 'Letzter Monat',
            nextMonth     : 'Nächster Monat',
            months        : ['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'],
            weekdays      : ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
            weekdaysShort : ['So','Mo','Di','Mi','Do','Fr','Sa']
        },
        disableWeekends: true,
        format: 'DD.MM.YYYY'
    });

    $('form').submit(function() {
        $('input[type=submit]', this).prop('disabled', 'disabled').val('Wird geladen, bitte warten.');
    });
});