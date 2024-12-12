<?php include('header.php');
include("conn.php");
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/slide1.png" alt="" style="width:100%;">
        </div>
     
      <div class="item">
        <img src="images/slide3.png" alt="" style="width:100%;">
      </div>
       <div class="item">
        <img src="images/slide4.png" alt="" style="width:100%;">
      </div>
       <div class="item">
        <img src="images/slide5.jpg" alt="" style="width:100%;">
       </div>
        <div class="item">
        <img src="images/slide6.jpg" alt="" style="width:100%;">
       </div>
        <div class="item">
        <img src="images/slide7.jpg" alt="" style="width:100%;">
       </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php
$abt=mysqli_fetch_assoc(mysqli_query($conn,"select * from cms_menu where page_url='about'"));
?>
<section class="about-section wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
   <div class="auto-container">
      <div class="row clearfix">
         <div class="content-column col-md-7">
            <div class="inner-box">
               <div class="sec-title">
                  <h2>Welcome to  <span><?=$theme['company_name']?></span></h2>
               </div>
               <div class="text"><?=$abt['sort_description']?></div>
             <a href="<?=$site?>about/" class="theme-btn btn-style-two">Read more</a>
            </div>
         </div>
         <div class="col-md-5">
            <div class="bxpp">
               <img src="<?=$site?>admin/uploads/up_image/<?=$abt['up_image']?>" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
</section>
 

<section class="team-section">
   <div class="auto-container">
      <div class="sec-title-three">
         <h2 class="mycolort text-light">Our Products</h2>
      </div>
      <div class="row clearfix">
          <?php
        $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id ='0' AND status = '1' limit 8";
                    $res = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                        $sub_cat = $row['ct_pd_name'];
                        $sub_mrp = $row['cat_pd_mrp'];
                        $sub_price = $row['cat_pd_price'];
                        $cat_url = htmlspecialchars($row['ct_pd_url']);
                    
                      $product_images = explode(",", $row['cat_pd_image']); // Split image filenames
         ?>
          <div class="team-member col-md-3 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
            <div class="inner-box">
               <div class="image-box">
                  <figure class="image"><img  src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" alt=""></figure>
               </div>
               <div class="lower-content card-body">
                  <h4><?=$sub_cat?></h4>
                  <p><?=$row['small_description']?>  </p>
                  <a href="<?=$site?>services.php?category=<?=$cat_url?>" class="theme-btn btn-style-two">View Details</a>
               </div>
            </div>
         </div>
         <?php } ?>
         
      </div>
      <!--<div class="row">-->
      <!--   <div class="col-md-12 text-center">-->
      <!--      <a href="<?=$site?>products/" class="theme-btn btn-style-two">View all Products</a>-->
      <!--   </div>-->
      <!--</div>-->
   </div>
</section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <div class="sec-title">
         <h2>Why Choose <span>Ashapura Steel India</span></h2>
      </div>
                <p class="why-text">Your satisfaction is our priority. We focus on building long-term relationships by offering transparent communication, competitive pricing, and unparalleled service. Ashapura Steel India is your trusted partner for all steel needs, delivering excellence with every product and service.</p>
            </div>
            <div class="row g-4">
                <!-- Quality Products -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3">
                             <img src="images/i1.png">
                            </div>
                            <h5 class="card-title">Top Quality Products</h5>
                            <p class="card-text">At Ashapura Steel India, we prioritize quality above all. Our steel products are crafted to meet international standards, ensuring durability, precision, and reliability.</p>
                        </div>
                    </div>
                </div>
                <!-- Custom Solutions -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3">
                               <img src="images/i2.png">
                            </div>
                            <h5 class="card-title"> Customization and Flexibility</h5>
                            <p class="card-text">Understanding the unique needs of every client, we provide customized solutions in various grades, sizes, and finishes, ensuring your project requirements are fully met.</p>
                        </div>
                    </div>
                </div>
                <!-- Sustainability -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <img src="images/i3.png">
                            </div>
                            <h5 class="card-title">Strong Industry Expertise</h5>
                            <p class="card-text">With years of experience and a dedicated team of professionals, we bring deep industry knowledge and technical expertise to every project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

<section class="project-section no-padding-bottom">
   <div class="container">
      <div class="sec-title">
         <h2>Photo <span>Gallery</span></h2>
      </div>
   </div>
   <div class="tabs-content">
      <div class="tab active-tab clearfix" id="tab-one">
         <div class="five-item-carousel owl-carousel owl-theme">
             <?php
             $gall=mysqli_query($conn,"select * from gallery where status='1'");
             while($gall1=mysqli_fetch_assoc($gall))
             {
            ?>
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
            <?php } ?>
         </div>
      </div>
   </div>
</section>
 
<section class="call-to-action wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
   <div class="auto-container">
      <div class="row clearfix">
         <div class="column col-md-8 col-sm-12 col-xs-12">
            <?=$header['page_description']?>
         </div>
         <div class="column text-right col-md-4 col-sm-12 col-xs-12">
            <a href="tel:+91<?=$theme['mobile']?>" class="theme-btn btn-style-two">CALL US NOW!</a>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php');?>