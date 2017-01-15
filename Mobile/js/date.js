 /*Author : Mathuja 2013050*/
 $(function() {
        $( "#dayin,#dayout" ).datepicker();
    });

$("#dayin").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#dayin").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#dayout").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#dayin").datepicker("getDate");
        var end = $("#dayout").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#nightcount").val(days);
    }
});