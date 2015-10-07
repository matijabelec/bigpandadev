//$.datepicker.formatDate( "dd.mm.yyyy.", new Date( 2007, 1 - 1, 26 ) );

/*$('.bigPandaDatePicker').each(function(){
    var id_input=this.id.split('_datepicker')[0];
    var sfInput = $('#'+id_input)[0];
    if(! (sfInput)){
        console.error('An error has occurred while creating the datepicker');
    }
    $(this).datepicker({
        'yearRange':$(this).data('yearrange'),
        'changeMonth':$(this).data('changemonth'),
        'changeYear':$(this).data('changeyear'),
        'altField' : '#'+id_input,
        'altFormat' : 'dd.mm.yyyy.',
        'minDate' : null,
        'maxDate': null
    });

    $(this).keyup(function(e) {
        if(e.keyCode == 8 || e.keyCode == 46) {
            $.datepicker._clearDate(this);
            $('#'+id_input)[0].value = '';
        }
    });
    var dateSf = $.datepicker.parseDate('dd.mm.yyyy',sfInput.value);

    $(this).datepicker('setDate',dateSf);
    $(this).show();
    $(sfInput).hide();
});*/

$(function() {
    $(".bigPandaDatePicker").datepicker({
        'yearRange':$(this).data('yearrange'),
        'changeMonth':$(this).data('changemonth'),
        'changeYear':$(this).data('changeyear'),
        'altFormat' : 'yy-mm-dd'
    });
});

//$(".bigPandaDatepicker").datepicker();
