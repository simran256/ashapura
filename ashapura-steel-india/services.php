<?php

include("conn.php");

// Validate and sanitize input
$category_slug = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

// Fetch the specific main category based on slug
$main_cat_sql = "SELECT * FROM `cat_prod` WHERE ct_pd_url = '$category_slug' AND sub_category_id = '0' AND status = '1'";
$main_cat_res = mysqli_query($conn, $main_cat_sql);


$main_category = mysqli_fetch_assoc($main_cat_res);
$cat_id = $main_category['id'];
$cat_name = htmlspecialchars($main_category['ct_pd_name']);

?>
<?php  include('header.php');?>
<section class="page-title" style="background-image:url(<?=$site?>images/background/5.jpg);">
   <div class="auto-container">
      <div class="content-box">
         <h1><?=$main_category['ct_pd_name']?></h1>
          <ul class="bread-crumb">
            <li><a href="<?=$site?>">Home</a></li>
              <li><?=$main_category['ct_pd_name']?></li>
          </ul>
      </div>
   </div>
</section>

 <section>
   <div class="auto-container mt-5"> 
     <div class="row clearfix">
    <?php
    // Query to fetch subcategories or products under the category
    $sql = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$cat_id' AND status = '1'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        // If there are subcategories or products under the category
        while ($row = mysqli_fetch_assoc($res)) {
            $sub_cat = htmlspecialchars($row['ct_pd_name']);
            $sub_mrp = $row['cat_pd_mrp'];
            $sub_price = $row['cat_pd_price'];
            $cat_url = htmlspecialchars($row['ct_pd_url']);
            $product_images = explode(",", $row['cat_pd_image']); // Split image filenames
            ?>
            <div style="height:500px;" class="team-member col-md-4 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" alt=""></figure>
                    </div>
                    <div class="lower-content card-body">
                        <h4><?=$sub_cat?></h4>
                        <p><?=htmlspecialchars($row['small_description'])?></p>
                        <a href="<?=$site?>product-details/<?=$cat_url?>" class="theme-btn btn-style-two">View Details</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // If no subcategories or products, fetch the product directly using the category ID
        $single_product_sql = "SELECT * FROM `cat_prod` WHERE id = '$cat_id' AND status = '1'";
        $single_product_res = mysqli_query($conn, $single_product_sql);

        if (mysqli_num_rows($single_product_res) > 0) {
            $single_product = mysqli_fetch_assoc($single_product_res);
            $product_name = htmlspecialchars($single_product['ct_pd_name']);
            $product_mrp = $single_product['cat_pd_mrp'];
            $product_price = $single_product['cat_pd_price'];
            $product_desc = htmlspecialchars($single_product['small_description']);
            $product_url = htmlspecialchars($single_product['ct_pd_url']);
            $product_images = explode(",", $single_product['cat_pd_image']); // Split image filenames
            ?>
            <div class="team-member col-md-4 col-sm-4 col-xs-4 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$product_images[0]?>" alt=""></figure>
                    </div>
                    <div class="lower-content card-body">
                        <h4><?=$product_name?></h4>
                        <p><?=$product_desc?></p>
                       
                        <a href="<?=$site?>product-details/<?=$product_url?>" class="theme-btn btn-style-two">View Details</a>
                    </div>
                </div>
            </div>
            <?php
        } else {
            // If no products exist, show a fallback message
            echo '<div class="col-md-12"><p>No products found in this category.</p></div>';
        }
    }
    ?>
</div>
 
   </div>
</section>
 <br><br><br>  
<?php include('footer.php');?>