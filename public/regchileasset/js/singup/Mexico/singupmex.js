$( document ).ready(function() {
    console.log( "ready! in Mexico" );
    // $('#type_per').val(0);
    $('#text-invoice').hide();
    $('#upload_constancia').hide();
});

$("input[name='invoice']" ).change(function() {
    if ($(this).val() == 'SI') {
    $('#text-invoice').show();
    $('#upload_constancia').show();
  }
  else {
    $('#text-invoice').hide();
    $('#upload_constancia').hide();
  }
});

$('#check_invoice_address').change(function(){
    if( $('#check_invoice_address').prop('checked') ) {
        $('#adress_invoice_div').hide();
    }else{
        $('#adress_invoice_div').show();
    }
})