window.onload=Initialisation; //when the whole page loads is when this code is run, instead of before it loads as js usually does.
	

function Initialisation() 
{
	//word counter
	var elem = $("#count") ;
	$("#plot").limiter(1000, elem);
	
	// Theatrical Validator
	var TValid = $('input[name=TRelease').val();
	if(TValid != null)
	{
		//Checks if the date is a valid format
		if(!(/^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.test(TValid)))
			{
				$('<div class = "TError">Error!</div>	 ').appendTo('.TError');
				valid=false;
			}
		else{$('<div class = "TError">Valid!</div>	 ').appendTo('.TError');}
	}return valid;
	
	
	// DVD validator
	var DValid = $('input[name=DRelease').val();
	if(DValid != null)
	{
	//Checks if the date is a valid format
		if(!(/^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.test(DValid)))
			{
				$('<div class = "DError">Error!</div>	 ').appendTo('.DError');
				valid=false;
			}
		else{$('<div class = "DError">Valid!</div>	 ').appendTo('.DError');}
	}return valid;
	
	//checks if 
	var Vtype = $('input[name=Vtype]:checked').val();
	if(Vtype == null || Vtype== "")
	{
		valid=false;
		alert("You need to select a Video Type!")
	//no error anymore = remove span
	}
	else
	{ 
		return valid;
	} 
	
}

//date picker (calendar)
$(function() 
{ 
  $( "#Ddatepicker" ).datepicker();
  $( "#Tdatepicker" ).datepicker();
});

//

//character limiter
(function($) {
    $.fn.extend( {
        limiter: function(limit, elem) {
            $(this).on("keyup focus", function() {
                setCount(this, elem);
            });
            function setCount(src, elem) {
                var chars = src.value.length;
                if (chars > limit) {
                    src.value = src.value.substr(0, limit);
                    chars = limit;
                }
                elem.html( limit - chars );
            }
            setCount($(this)[0], elem);
        }
    });
})(jQuery);



