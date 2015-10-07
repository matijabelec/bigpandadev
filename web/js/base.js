$('.date').datepicker({ 
    showOn: 'button', 
    buttonImageOnly: true, 
    changeMonth: true,
    changeYear: true,
    dateFormat: 'dd-mm-yy',
    yearRange: "-0:+1"  
});

$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
