var calendarAddMonth, calendarAddWeekday, calendarAddYear, calendarTemplateMonth, calendarTemplateWeekday, calendarTemplateYear, calendarLeapYear;
var calendarAddMoon, calendarTemplateMoon;
var calendarAddSeason, calendarTemplateSeason;
var calendarAddEpoch, calendarTemplateEpoch;
var calendarYearSwitcher, calendarYearSwitcherField, calendarEventModal;
var calendarSortMonths, calendarSortWeekdays, calendarSortYears, calendarSortMoons, calendarSortSeasons, calendarSortEpochs;

$(document).ready(function() {
    // Form
    calendarAddMonth = $('#add_month');
    if (calendarAddMonth.length === 1) {
        calendarAddWeekday = $('#add_weekday');
        calendarAddYear = $('#add_year');
        calendarAddMoon = $('#add_moon');
        calendarAddSeason = $('#add_season');
        calendarAddEpoch = $('#add_epoch');
        calendarTemplateMonth = $('#template_month');
        calendarTemplateWeekday = $('#template_weekday');
        calendarTemplateYear = $('#template_year');
        calendarTemplateMoon = $('#template_moon');
        calendarTemplateSeason = $('#template_season');
        calendarTemplateEpoch = $('#template_epoch');
        calendarLeapYear = $('input[name="has_leap_year"]');

        calendarSortMonths = $(".calendar-months");
        calendarSortWeekdays = $(".calendar-weekdays");
        calendarSortYears = $(".calendar-years");
        calendarSortMoons = $(".calendar-moons");
        calendarSortSeasons = $(".calendar-seasons");
        calendarSortEpochs = $(".calendar-epochs");

        initCalendarForm();
    }

    // View
    calendarYearSwitcher = $('#calendar-year-switcher');
    if (calendarYearSwitcher.length === 1) {
        calendarYearSwitcherField = $('#calendar-year-switcher-field');
        calendarEventModal = $('#add-calendar-event');

        initCalendarYearSwitcher();
        initCalendarEventBlock();
    }


    $(document).on('shown.bs.modal', function() {
        initCalendarEventModal();
    });
});

/**
 * Initialize the calendar
 */
function initCalendarForm() {
    calendarAddMonth.on('click', function(e) {
        e.preventDefault();

        $(this).before('<div class="form-group">' +
            calendarTemplateMonth.html() +
        '</div>');

        // Handle deleting already loaded blocks
        calendarDeleteRowHandler();

        return false;
    });

    calendarAddWeekday.on('click', function(e) {
        e.preventDefault();

        $(this).before('<div class="form-group">' +
            calendarTemplateWeekday.html() +
            '</div>');


        // Handle deleting already loaded blocks
        calendarDeleteRowHandler();

        return false;
    });

    calendarAddYear.on('click', function(e) {
        e.preventDefault();

        $(this).before('<div class="form-group">' +
            calendarTemplateYear.html() +
            '</div>');


        // Handle deleting already loaded blocks
        calendarDeleteRowHandler();

        return false;
    });

    calendarLeapYear.on('click', function() {
        $('#calendar-leap-year').toggle();
    });

    calendarAddMoon.on('click', function(e) {
        e.preventDefault();

        $(this).before('<div class="form-group">' +
            calendarTemplateMoon.html() +
            '</div>');

        // Handle deleting already loaded blocks
        calendarDeleteRowHandler();

        return false;
    });


    calendarAddSeason.on('click', function(e) {
        e.preventDefault();

        $(this).before('<div class="form-group">' +
            calendarTemplateSeason.html() +
            '</div>');

        // Handle deleting already loaded blocks
        calendarDeleteRowHandler();

        return false;
    });


    // Handle deleting already loaded points
    calendarDeleteRowHandler();
}

function calendarDeleteRowHandler() {
    $.each($('.month-delete'), function (index) {
        $(this).unbind('click'); // remove previous bindings
        $(this).on('click', function(e) {
            if ($(this).data('remove') === 4) {
                $(this).parent().parent().parent().parent().remove();
            } else {
                $(this).parent().parent().parent().remove();
            }
            e.preventDefault();
            return false;
        });
    });

    calendarSortMonths.sortable();
    calendarSortWeekdays.sortable();
    calendarSortYears.sortable();
    calendarSortMoons.sortable();
    calendarSortSeasons.sortable();
}

function initCalendarYearSwitcher() {
    calendarYearSwitcher.on('click', function() {
        $(this).hide();
        year = calendarYearSwitcherField.val();
        calendarYearSwitcherField.show().focus().val('').val(year);
    });
}

function initCalendarEventBlock() {
    $('.calendar-event-block').each(function() {
        if ($(this).data('url')) {
            $(this).click(function (e) {
                window.location = $(this).data('url');
            });
        }
    });
}

function initCalendarEventModal() {
    $('input[name="is_recurring"]').on('click', function(e) {
        $('#add_event_recurring_until').toggle();
    });

    $('#calendar-action-existing').on('click', function() {
        $('#calendar-event-first').hide();
        $('.calendar-new-event-field').hide();
        $('#calendar-event-subform').fadeToggle();
        $('#calendar-event-submit').toggle();
    });

    $('#calendar-action-new').on('click', function() {
        $('#calendar-event-first').hide();
        $('.calendar-existing-event-field').hide();
        $('#calendar-event-subform').fadeToggle();
        $('#calendar-event-submit').toggle();
    });

    $('#calendar-event-switch').on('click', function(e) {
        e.preventDefault();
        $('#calendar-event-subform').hide();
        $('#calendar-event-first').fadeToggle();
        $('.calendar-existing-event-field').show();
        $('.calendar-new-event-field').show();

        $('#calendar-event-submit').toggle();

    });
}