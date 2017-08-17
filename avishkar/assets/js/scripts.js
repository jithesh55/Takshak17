
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
	    Modals
	*/
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});
    
    /*
        Form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });
    $("#formmodelfile").change(function(){
            $("#formmodellabel").removeClass('input-error');
    }); 
    
    $('.registration-form').on('submit', function(e) {
        
        $(this).find('input[type="text"]:not(.form-optional)').each(function(){
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                $(this).removeClass('input-error');
            }
        });
        if(!$("#formmodelfile").val()){
            e.preventDefault();
            $("#formmodellabel").addClass('input-error');
        }
        else{
            $("#formmodellabel").removeClass('input-error');
        }
    	
    });
    
});
function addmember(){
    if($('.hidden-form-member').length <= 1){
        $("#newmember").hide();
    }
     $('.hidden-form-member').first().fadeIn(function(){
        $(this).removeClass('hidden-form-member');
     });
    return false;
}