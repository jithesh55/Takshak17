jQuery(document).ready(function() {

    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/"+PAGE);

    // Create Cloud 
    var size = Math.round(Math.random() * 10);
    for (var j = 0; j < 5 + size; j++) {
        $cloud = $('<span class="cloudLayer movingCloud1"><img src="http://www.takshak.in/2017/public/images/cloud.png" class="cloudImage"/></span>');
        if (Math.random() < 0.5) {
            $cloud.css("animation-direction", "reverse");
        }
        $cloud.css("animation-duration", (40 + (Math.random() * Math.random() * 30)) + "s");
        $cloud.css("animation-delay", "-" + (10 + Math.random() * 20) + "s");
        var x = 0;
        var y = $(window).height() / 2 * Math.random() - 250 * Math.random();
        var z = 1000 - (Math.random() * 200);
        var a = Math.random() * 360;
        var s = .75 + Math.random();
        $cloud.data = {
            x: x,
            y: y,
            z: z,
            a: a,
            s: s,
            speed: .1 * Math.random()
        };

        var t = 'translateX(0px ) translateY( ' + (y) + 'px ) translateZ( ' + (z) + 'px ) scale( ' + s + ')';
        $cloud.css("transform", t);
        /*
    
        $cloud.appendTo(".cloudbase");
    }
	    Modals
	*/
        $('.launch-modal').on('click', function(e) {
            e.preventDefault();
            $('#' + $(this).data('modal-id')).modal();
        });

        /*
            Form validation
        */
        $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
            $(this).removeClass('input-error');
        });
        $("#formmodelfile").change(function() {
            $("#formmodellabel").removeClass('input-error');
        });

        $('.registration-form').on('submit', function(e) {

            $(this).find('input:not(.form-optional)').each(function() {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
            $(this).find('select').each(function() {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        });

    }
});

function addmember() {
    if ($('.hidden-form-member').length <= 1) {
        $("#newmember").hide();
    }
    $('.hidden-form-member').first().fadeIn(function() {
        $(this).removeClass('hidden-form-member');
    });
    return false;
}