// Joyride demo
$('#start-jr').on('click', function() {
  $(document).foundation('joyride','start');
});
// Input demo
$(document).ready(function(){
    $(".wcva_attribute_radio").click(function(){
        if($(this).is(":checked")){
        	$(".swatchinput").removeClass("flavor-active");
            $(this).parent().addClass("flavor-active");
        }
    });
});

$(document).ready(function(){
    $(".close-message").click(function(){
        $(".woocommerce-message").remove();
    });
});