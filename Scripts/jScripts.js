window.onload=load; //Load on run 
	

function load() 
{
	//word counter
	var elem = $("#count") ;
	$("#plot").limiter(1000, elem);
	$( "#Ddatepicker" ).datepicker();
	$( "#Tdatepicker" ).datepicker();
}


$(document).ready(function(){
	// initialise rating system
	
	// activates on 'submit' button
	$('form').submit(function(e){
		// error divs
		var MPAAError = '<div class="MPAAError">Please assign a rating</div>'
		var TypeError = '<div class="TypeError">Please assign a video type</div>'
		var DValid = $('input[name=DRelease').val();
		var TValid = $('input[name=TRelease').val();
		
		// if no title, gives message and prevents submission
		if($('#title').val() == ''){
				$('#TReleaseError').removeClass('InitError');
				$('#TReleaseError').addClass('Error');
				e.preventDefault();
			}
		else if(!$('#title').val() == ''){
				$('#TReleaseError').removeClass('Error');
				$('#TReleaseError').addClass('InitError');
		}
		
		if(DValid != null){
		//Checks if the date is a valid format
		if(!(/^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.test(DValid))){
				valid=false;
				//this is only if the html error catcher fails
				alert("You need to give a DVD release date!")
			}
		else {/*nothing*/}
		}
		
		if(TValid != null){
		//Checks if the date is a valid format
		if(!(/^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.test(TValid))){
				valid=false;
				//this is only if the html error catcher fails
				alert("You need to give a theatrical release date!")
			}
		else{}
		}
		
		// if no MPAA rating, gives message and prevents submission
		if(!$('input[name="Rating"]:checked').val()){
			$('.MPAAError').remove();
				$('#mpaa_rating').append(MPAAError);
				e.preventDefault();
			}
		else if($("input[name='Rating']:checked").val()){
			$('.MPAAError').remove();
		}
		
		// if no genre, gives message and prevents submission
		if($("#video_type input:checked").length === 0){
			$('.TypeError').remove();
				$('#video_type').append(TypeError);
				e.preventDefault();
		}
		else{
		   $('.TypeError').remove();
		}
	});
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



