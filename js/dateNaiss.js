$(document).ready(function() {
    $('#dateRangePicker')
        .datepicker({
            format: 'dd-mm-yyyy',
            startDate: '01-01-1970',
            endDate: '30-12-2004'
        })
});