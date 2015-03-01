



<!-- About Section -->
<!-- Header -->
<header>

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-lg-offset-1">


                <div class="intro-text ">
                 <span class="name">Emergency Household Repair</span>

                 <p class="skills">Experts to your door in one hour or less</p>

                 <a href="#portfolioModal2"  data-toggle="modal" class="btn btn-lg btn-outline">
                    <i class="fa fa-download"></i> Request a hero now
                </a>
                <br><br>
            </div>
            

        </div>

        <div class="col-lg-4 col-lg-offset-0">
         <img src="http://www.suitcasedev.co.uk/tradesman/public/assets/images/superbuilder1.svg" alt="superbuilder">

     </div>
    
</div>
</div>

</header
<!-- Contact Section -->

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>What is a household emergency?</h2>
                <hr class="star-light">
                 <p>Some of the emergencies we can help with are:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
            <ul>
                <li>
                Heating emergencies where you have no heating/hot water
                </li>
                 <li>
               Gas leaks
                </li> 
                <li>
              Falling gutters, slates or tiles.
                </li>
                 <li>
              Wasps nest
                </li>
                <li>
              Damaged or missing grates/covers or inspection chamber covers
                </li>

                <li>
              Damaged or missing grates/covers or inspection chamber covers
                </li>
                <li>
             Missing brickwork, concrete or rendering
                </li>
            </ul>
            </div>
            <div class="col-lg-4">
                 <ul>
                <li>
               Burst pipes or hot water cylinders, causing internal flooding
                </li>
                 <li>
               Total loss of water (but not when supply company has shut off supply)
                </li>
                <li>
               Any leak
                </li> 
                <li>
              Blocked toilet 
                </li>
                
                 <li>
             Defective entrance door or door lock where security of home is at risk.
                </li>

                 <li>
             Broken window panel, pane or fastener 
                </li>
            </ul>
                </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#portfolioModal2"  data-toggle="modal" class="btn btn-lg btn-outline">
                    <i class="fa fa-download"></i> Request a hero now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p></p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li><li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About </h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">













                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                     <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                     <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                     <form name="sentMessage" id="contactForm" action="<?php echo URL; ?>api/xhrInsert"  novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Postcode</label>
                                <input type="postcode" class="form-control" placeholder="Postcode" name="postcode" id="postcode" required data-validation-required-message="Please enter your postcode.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address</label>
                                <input type="address" class="form-control" placeholder="Address" name="address" id="address" required data-validation-required-message="Please enter your address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address"  name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Summary of emergency</label>
                                <textarea rows="1" class="form-control" placeholder="Summary of emergency" name="summary" id="summary" required data-validation-required-message="Summary of emergency."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form> 


                    <div id="message1">
                    </div>

                        <div id="success">


                        <div id="stage" class="stage">
                            <div id="tap" class="stage"></div>
                            <div id="bg" class="stage"></div>
                            <div id="clouds" class="stage"></div>
                            <div id="hill2" class="stage"></div>
                            <div id="hill1" class="stage"></div>
                            <div id="balloons" class="stage"></div>
                            <div id="logo">Spritely</div>
                        </div>
                        <div id="bird"></div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.spritely/0.6.8/jquery.spritely.min.js"></script>


</body>

</html>
