<?php include('header.php');?>
 <section class="page-title" style="background-image:url(<?=$site?>">
     
     <!--<p>images/background/5.jpg);</p>-->
     
      <div class="auto-container">
         <div class="content-box">
               <h1>About Us</h1>
                <ul class="bread-crumb">
                  <li><a href="<?=$site?>">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

<section class="about-section wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
   <div class="auto-container">
      <div class="row clearfix">
         <div class="content-column col-md-7">
            <div class="inner-box">
               <div class="sec-title">
                  <h2>About <span><?=$theme['company_name']?></span></h2>
               </div>
               <div class="text"><?=$header['sort_description']?></div>
               <div class="fun-facts">
                  <div class="row clearfix">
                    <?php
                    $numbers=mysqli_query($conn,"select * from colors where status='1'");
                    while($numbers1=mysqli_fetch_assoc($numbers))
                    {
                    ?>
                     <div class="column col-md-4 col-sm-4 col-xs-12 count-box">
                        <div class="inner">
                           <span class="counter-icon"><span class="icon <?=$numbers1['code']?>"></span></span>
                           <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="<?=$numbers1['name']?>">0</span></div>
                           <div class="counter-title"><?=$numbers1['content']?></div>
                        </div>
                     </div>
                     <?php } ?>
                    
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-5">
            <div class="bxpp">
               <img src="<?=$site?>admin/uploads/up_image/<?=$header['up_image']?>" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
</section>

 
     
   
<?php include('footer.php');?>