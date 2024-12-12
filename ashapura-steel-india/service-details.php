<?php
include("conn.php");
$url = mysqli_real_escape_string($conn, $_GET['alias']);
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
                          $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames

} 
?>
<?php
 include('header.php');?>
<section class="page-title" style="background-image:url(<?=$site?>images/background/5.jpg);">
   <div class="auto-container">
      <div class="content-box">
         <h1><?=$subcategory_name?></h1>
          <ul class="bread-crumb">
            <li><a href="<?=$site?>">Home</a></li>
              <li><?=$subcategory_name?></li>
          </ul>
      </div>
   </div>
</section>

 <section>
   <div class="container bx1">          
         <div class="row">
             <div class="col-md-5">
                <img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" class="img-responsive">
             </div>
             <div class="col-md-7">
                 <div class="service_content">
                <h3><?=$subcategory_name?></h3> 
                <div class="tbl">
                <?=$header1['long_description']?>
                 </div>
                <br> 
                
                <p class="ac mb15px">
               <a href="<?=$site?>contact-us.php" class="theme-btn btn-style-one"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Yes! I Am interested</a>
            </p>

             </div>
             </div>
         </div>
      </div>
</section>
   
<?php include('footer.php');?>