<style>
.tbl table{
width: 100%;
max-width: 100%;
margin-bottom: 1rem;
background-color: transparent;
}
.tbl tr:nth-of-type(odd){
background-color: rgba(0,0,0,.05);
}
.tbl table td,.tbl table th{
padding: 0.75rem;
vertical-align: top;
border-top: 1px solid #dee2e6;
}
</style>
<footer class="main-footer">
        <div class="auto-container">
            <div class="row clearfix"> 
                <div class="footer-column col-md-6 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                    <div class="footer-widget logo-widget">
                        <h2>Welcome To <?=$theme['company_name']?></h2>
                        <div class="widget-content">
                            <div class="text"><?=$theme['head_office']?></div>
                            <ul class="contact-info">
                                <li><div class="icon"><span class="fa fa-user"></span></div> <?=$theme['name']?></li>
                                <li><div class="icon"><span class="flaticon-technology-1"></span></div><strong>Mobile :</strong>+91-<?=$theme['mobile']?></li>
                                <li><div class="icon"><span class="flaticon-interface-2"></span></div><strong>Mail</strong> : <?=$theme['email']?></li>
                                <li><div class="icon"><span class="flaticon-location-pin"></span></div><strong>Address</strong> : <?=$theme['address']?></li>
                            </ul>
                        </div>
                    </div> 
                </div> 
                <div class="footer-column col-md-2 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                    <div class="footer-widget posts-widget">
                        <h2>Quick Links</h2>
                        <ul class="text-white">
                            <li><a href="<?=$site?>">Home</a></li>
                            <li><a href="<?=$site?>about-us.php">About Us</a></li>
                           
                            <li><a href="<?=$site?>our-gallery.php">Our Gallery</a></li>
                            
                            <li><a href="<?=$site?>contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div> 
                <div class="footer-column col-md-4 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                    <div class="footer-widget gallery-widget">
                        <h2>We Are Here</h2>
                        <iframe src="<?=$theme['google_map']?>" width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> 
            </div>
        </div> 
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-white text-center"><?=$theme['copyright']?> All Rights Reserved  <a class="text-white" href="https://www.web2techsolutions.com"> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
</div> 
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div> 
<div class="whatapp">
   <a href="https://api.whatsapp.com/send?phone=91<?=$theme['mobile']?>&text=<?=$theme['nature_of_business']?>" target="_blank">
        <img src="<?=$site?>images/whatapp-icn.png" alt="whatapp">
    </a>
</div> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="<?=$site?>js/jquery.js"></script>
<script src="<?=$site?>js/bootstrap.min.js"></script>
<script src="<?=$site?>js/revolution.min.js"></script>
<script src="<?=$site?>js/jquery.fancybox.pack.js"></script>
<script src="<?=$site?>js/jquery.fancybox-media.js"></script>
<script src="<?=$site?>js/owl.js"></script>
<script src="<?=$site?>js/appear.js"></script>
<script src="<?=$site?>js/wow.js"></script>
<script src="<?=$site?>js/bxslider.js"></script>
<script src="<?=$site?>js/script.js"></script> 
<script src="<?=$site?>js/canvasjs.min.js"></script>
<script src="<?=$site?>js/charts-script.js"></script> 
</body>
</html>