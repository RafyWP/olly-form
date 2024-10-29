(function( $ ) {
	'use strict';
    
	$( window ).load(function() {

        setTimeout(() => showPopUp(), 1000);

        $("a").click(e => {
            e.preventDefault();
            e.stopPropagation();
            showPopUp();
        });

        $("body").click(() => $(".popup-block").removeClass("active"));
        $(".popup-block").click(e => e.stopPropagation());

	});

    function showPopUp() { 
        $(".popup-block").addClass("active").fadeOut(0).fadeIn(500); 
    }

    let currentStep = 1;
    
    function updateStep() {
        $('.field, .tks, .steppers img, .btns .btn').hide();
        $('.step' + currentStep).show();
    }

    updateStep();

    $('.btn.green-btn').click(e => {
        e.preventDefault();
        let allFilled = validInput(currentStep);
        if (currentStep < 4 && allFilled) {
            currentStep++;
            updateStep();
        }
    });

    $('.btn.light-btn').click(e => {
        e.preventDefault();
        if (currentStep > 1) {
            currentStep--;
            updateStep();
        }
    });

    function validInput(currentStep){
        let inputs = $('.step' + currentStep).find('input[required]');
        let allFilled = true;
        inputs.each(function() {
            //Very simple validation
            if ($(this).val() === '') {
                allFilled = false;
                $(this).closest('.field').find('.msg').text('Please insert a valid ' + $(this).attr('name'));
                $(this).closest('.field').find('.msg').addClass('error');
            }
        });

        return allFilled;
    }

})( jQuery );
