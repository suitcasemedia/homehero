$(function(){

    $('#contactForm').submit(function() {
        var url = $(this).attr('action')
        var data = $(this).serialize();
        $.post(url, data, function(o) {
           
 // Success message
                    $('#contactForm').fadeOut( "slow" , function(){

                        $('.modal-body').css('background', '#18BC9C');

                        $('#message1').append('<p> Thanks for your order ' + o.name + ' a hero is on his or her way to ' + o.address + ' right now!   </p>');
    

                        $('#success').fadeIn("slow");

                            


                $('#bird')
                    .sprite({fps: 9, no_of_frames: 1})
                    .spRandom({top: 200, bottom: 0, left: 100, right: 320})
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
                // window.fly_quickly_forwards();
                window.page = {
                    hide_panels: function() {
                        $('.panel').hide(300);
                    },
                    show_panel: function(el_id) {
                        this.hide_panels();
                        $(el_id).show(300);
                    }
                }



                    });



    }, 'json') ;
        return false;
    });







});