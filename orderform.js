function calc_total(){
    var sum = 0;
    $('.input-amount').each(function(){
        sum += parseFloat($(this).text());
    });
    $(".preview-total").text(sum);    
}
$(document).on('click', '.input-remove-row', function(){ 
    var tr = $(this).closest('tr');
    tr.fadeOut(200, function(){
    	tr.remove();
	   	calc_total()
	});
});

$(function(){
    $('.preview-add-button').click(function(){
        var form_data = {};
        form_data["unleaded"] = $('.payment-form input[name="unleaded"]').val();
        form_data["mid"] = $('.payment-form input[name="mid"]').val();
        form_data["premium"] = $('.payment-form input[name="premium"]').val();
        form_data["hwy"] = $('.payment-form input[name="hwy"]').val();
        form_data["dyed"] = $('.payment-form input[name="dyed"]').val();
        form_data["rec"] = $('.payment-form input[name="rec"]').val();
        form_data["ker"] = $('.payment-form input[name="ker"]').val();
form_data["message"] = $('.payment-form input[name="message"]').val();
        form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
        var row = $('<tr></tr>');
        $.each(form_data, function( type, value ) {
            $('<td class="input-'+type+'"></td>').html(value).appendTo(row);
        });
        $('.preview-table > tbody:last').append(row); 
        calc_total();
    });  
});
