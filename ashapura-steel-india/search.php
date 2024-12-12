<?php include('header.php');
if(isset($_POST['search']) & $_POST['search']!='')
{
$search=$_POST['search'];
$pro=mysqli_query($conn,"select * from cat_prod where ct_pd_name like '%$search%'");
$procount=mysqli_num_rows($pro);
}else{
$search="Our Products";  
$pro=mysqli_query($conn,"select * from cat_prod where sub_category_id!='0'");
}
?>
 <section class="page-title" style="background-image:url(<?=$site?>images/background/5.jpg);">
      <div class="auto-container">
         <div class="content-box">
               <h1><?=$search?></h1>
                <ul class="bread-crumb">
                  <li><a href="<?=$site?>">Home</a></li>
                    <li><?=$search?></li>
                </ul>
            </div>
        </div>
    </section>
<?php
if(!isset($_POST['search']) or $procount=='0')
{
  $pro=mysqli_query($conn,"select * from cat_prod where sub_category_id!='0'");
?>
<div class="container">
  <center>
    <h3>Your search is not matched, Please checkout our other products here!</h3>
  </center>
</div>
<?php } ?>
 <section>
   <div class="auto-container mt-5"> 
      <div class="row clearfix">
         <?php                          
          while($pro1=mysqli_fetch_assoc($pro))
          {
           $image=explode(",",$pro1['cat_pd_image']);
          ?>         
         <div class="team-member col-md-4 col-sm-6 col-xs-12 wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
            <div class="inner-box">
               <div class="image-box">
                  <figure class="image"><img src="<?=$site?>admin/uploads/product/cat_pd_image/<?=$image['0']?>" alt=""></figure>
               </div>
               <div class="lower-content card-body">
                  <h4><?=$pro1['ct_pd_name']?></h4>
                  <p><?=$pro1['small_description']?></p>
                  <a href="<?=$site?>product/<?=$pro1['ct_pd_url']?>" class="theme-btn btn-style-two">View Details</a>
               </div>
            </div>
         </div>
         <?php } ?>
         
      </div> 
   </div>
</section>

<?php include('footer.php');?>    