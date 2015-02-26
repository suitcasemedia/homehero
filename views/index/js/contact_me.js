$(function() {
        //$("#success").hide();

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#contactForm').fadeOut( "slow" , function(){

                        $('#success').fadeIn("slow");
                    });
               
                






                $('#bird')
                    .sprite({fps: 9, no_of_frames: 1})
                    .spRandom({top: 50, bottom: 200, left: 100, right: 320})
                    .isDraggable()
                    .activeOnClick()
                    .active();
                $('#clouds').pan({fps: 30, speed: 0.7, dir: 'left', depth: 10});
                $('#hill2').pan({fps: 30, speed: 2, dir: 'left', depth: 30});
                $('#hill1').pan({fps: 30, speed: 3, dir: 'left', depth: 70});
                $('#balloons').pan({fps: 30, speed: 3, dir: 'up', depth: 70});
                $('#hill1, #hill2, #clouds').spRelSpeed(8);
                
                window.actions = {
                    fly_slowly_forwards: function() {
                        $('#bird')
                            .fps(10)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(10)
                            .spChangeDir('left');
                    },
                    fly_slowly_backwards: function() {
                        $('#bird')
                            .fps(10)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(10)
                            .spChangeDir('right');
                    },
                    fly_quickly_forwards: function() {
                        $('#bird')
                            .fps(20)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(30)
                            .spChangeDir('left');
                    },
                    fly_quickly_backwards: function() {
                        $('#bird')
                            .fps(20)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spRelSpeed(30)
                            .spChangeDir('right');
                    },
                    fly_like_lightning_forwards: function() {
                        $('#bird')
                            .fps(25)
                            .spState(1);
                        $('#hill1, #hill2, #clouds')
                            .spSpeed(40)
                            .spChangeDir('left');
                    },
                    fly_like_lightning_backwards: function() {
                        $('#bird')
                            .fps(25)
                            .spState(2);
                        $('#hill1, #hill2, #clouds')
                            .spSpeed(40)
                            .spChangeDir('right');
                    }
                };
                window.fly_quickly_forwards();
                window.page = {
                    hide_panels: function() {
                        $('.panel').hide(300);
                    },
                    show_panel: function(el_id) {
                        this.hide_panels();
                        $(el_id).show(300);
                    }
                }
















                // end of spritely stuff
                   


                
                

                    /*$('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');
*/


                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
