<?php include('header.php');?>
 <section class="page-title" style="background-image:url(<?=$site?>">
      <div class="auto-container">
         <div class="content-box">
               <h1>Our Gallery</h1>
                <ul class="bread-crumb">
                  <li><a href="<?=$site?>">Home</a></li>
                    <li>Our Gallery</li>
                </ul>
            </div>
        </div>
    </section>

   <section class="about-section wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
         <div class="container"> 
            <div class="row">
               <?php
               $gall=mysqli_query($conn,"select * from gallery where status='1'");
               while($gall1=mysqli_fetch_assoc($gall))
               {
               ?>
               <div class="col-lg-4">
                  <div class="gallery-item">
                     <div class="inner-box">
                        <div class="image-box">
                           <img src="<?=$site?>admin/uploads/gallery/<?=$gall1['image']?>" alt="" />
                           <div class="overlay-box">
                              <ul class="options-box">
                                 <li><a class="lightbox-image" title="Faizan Furniture" data-fancybox-group="gallery-one" href="<?=$site?>admin/uploads/gallery/<?=$gall1['image']?>"><span class="icon flaticon-search"></span></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
              

             
            </div>
         </div>
   </section>

<?php include('footer.php');?>