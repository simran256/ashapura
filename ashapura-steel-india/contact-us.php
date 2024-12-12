<?php include('header.php');?>
 <section class="page-title" >
      <div class="auto-container">
         <div class="content-box">
               <h1>Contact Us</h1>
                <ul class="bread-crumb">
                  <li><a href="<?=$site?>">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="form-section">
      <div class="auto-container">
         <div class="form-inner">
               <h3>Send us a Message</h3> 
                <div class="default-form contact-form">
                    <form method="post" action="<?=$site?>formaction.php">
                        <div class="row clearfix">
                            <div class="col-md-4 col-sm-5 col-xs-12">
                            
                                <div class="form-group">
                                    <input type="text" name="fname" value="" placeholder="Name" required>
                                </div>
                                
                                <div class="form-group ">
                                    <input type="text" name="subject" value="" placeholder="Subject">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                     <div class="g-recaptcha" data-sitekey="<?php echo $captchacode?>" required ></div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-8 col-sm-7 col-xs-12">    
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Requirement" required></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" name="contact" class="theme-btn btn-style-one">Send a Message</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div> 
                <div class="contact-info-box">
                  <div class="row clearfix"> 
                     <div class="column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                           <h4>About Company</h4>
                            <div class="text"><?=$theme['head_office']?></div>
                        </div> 
                        <div class="column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <h4>address</h4>
                            <div class="text"><i class="fa fa-map-marker"></i> <?=$theme['address']?></div>
                        </div> 
                        <div class="column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <h4>Contact info</h4>
                            <ul class="contact-info" id="conkll">
                                 
                                <li><div class="icon"><span class="flaticon-technology-1"></span></div> :</strong>+91-<?=$theme['mobile']?> </li>
                                <li><div class="icon"><span class="flaticon-interface-2"></span></div> : <?=$theme['email']?></li>

                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php include('footer.php');?>