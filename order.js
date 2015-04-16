$(function() {
 
 $("input,textarea").cfvalidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit haviour
       // get values from FORM
       var name = $("input#customer").val();
       var phone = $("input#phone").val();
       var unleaded = $("input#unleaded").val();
       var mid = $("input#mid").val();
       var premium = $("input#premium").val();
       var hwy = $("input#hyw").val();
       var dyed = $("input#dyed").val();
       var rec = $("input#rec").val();
       var kerosene = $("input#ker").val();
       var message = $("textarea#message").val();
      
         }
     $.ajax({
                type: "POST",
                url: "orderform.php",
                data: {unleaded: unleaded, mid: mid, premium: premium, hwy: hwy, dyed: dyed, rec: rec, kerosene: ker, message: message},
                cache: false,
                success: function(msg){
			$("#sendmessage").addClass("show");
			$("#errormessage").ajaxComplete(function(event, request, settings){
		
			if(msg == 'Thank you for your submition. We will reply shortly')
			{
				$("#sendmessage").addClass("show");				
			}
			else
			{
				$("#sendmessage").removeClass("show");
				result = msg;
			}
  });
