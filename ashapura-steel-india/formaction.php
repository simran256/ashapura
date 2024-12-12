<?php

include('conn.php');

if(isset($_POST['subscribe']))
{
  $email=$_POST['email'];
 
  //check duplicate
  
  $sql=mysqli_query($conn,"select * from webuser where email='$email' and subject='subscriber'");
  $count=mysqli_num_rows($sql);
  if($count>0)
  {
    echo "<script>alert('You are aleady our Subscriber!')</script>";
  }else{
     $qwe=mysqli_query($conn,"INSERT INTO `webuser`(`email`, `status`,`subject`) VALUES ('$email','1','subscriber')");
     if($qwe)
     {
     echo "<script>alert('Thank you!')</script>"; 
     }else{
     echo "<script>alert('Some error Occured,Please try again!')</script>"; 
     }
  }
 ?>
 <script>
  window.location.href="<?php echo $site?>index.php";
 </script>
 <?php
}


if(isset($_POST['contact']))
{
      if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
      {
       
         $fname=$_POST['fname'];
         $email=$_POST['email'];
         $phone=$_POST['phone'];
         $subject=$_POST['subject']; 
         $message=$_POST['message'];

         $qwe=mysqli_query($conn,"INSERT INTO `webuser`(`fname`, `email`, `phone`, `message`, `status`,`subject`) VALUES ('$fname', '$email', '$phone', '$message', '1','$subject')");
          if($qwe)
              {
               $to = 'info@srivastavchemicalhomecare.com';
               
                $message='Name :-'.$fname.'<br>';
                $message.='Email :-'.$email.'<br>';
                $message.='phone :-'.$phone.'<br>';
                $message.='subject :-'.$subject.'<br>';
                $message.='Message :-'.$mess.'<br>';
                
                   $service1 = "Contact Information";
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From:<info@srivastavchemicalhomecare.com>'."\r\n";
                $headers .= 'ssjnp101@gmail.com' . "\r\n";
                $mail1 = mail($to,$service1,$message,$headers);
                if($mail1){
                    echo "<script>alert('Thank you for your message, Our team will contact you very soon!')</script>";
                    ?>
                      <script type="text/javascript">
              window.location.href="<?php echo $site?>contact-us/";
          </script>
            <?php 
                }else{
                
                    
                         echo "<script>alert('Sorry ! Please try  again!')</script>";
                             ?>
                      <script type="text/javascript">
              window.location.href="<?php echo $site?>contact-us/";
   </script>
   <?php 
                    }
              

    }
    }
        
                
            
      }else{
         echo "<script>alert('Please fill the Valid Captcha')</script>";
         ?>
     <script type="text/javascript">
      window.location.href="<?php echo $site?>contact/";
      </script>
  <?php   
      }
 
  
}


if(isset($_POST['register']))
{
 if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
      {

        $first_name=$_POST['first_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password1=$_POST['password1'];


      
    if($password==$password1){
       //check duplicacy
         $sql=mysqli_query($conn,"select * from tbl_user where email='$email'");
         $count=mysqli_num_rows($sql);
         if($count>0)
         {
          echo "<script>alert('This email Id already in use!')</script>"; 
         }else{
          $qwe=mysqli_query($conn,"INSERT INTO `tbl_user`(`first_name`, `email`, `password`,`status`) VALUES ('$first_name', '$email', '$password','1')");
          if($qwe)
          {
            echo "<script>alert('register successfully!')</script>";
             ?>
              <script type="text/javascript">
              window.location.href="<?php echo $site?>login.php";
              </script>
            <?php
          }else{
            echo "<script>alert('Some error occured, Please try after some time!')</script>";
          }
       }
    }else{
      echo "<script>alert('Passwords are not matching!')</script>"; 
    }    
    


    }else{
      echo "<script>alert('Please fill the Valid Captcha')</script>";
    }    

  ?>
  <script type="text/javascript">
  window.location.href="<?php echo $site?>register.php"
  </script>
  <?php
}

if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql=mysqli_query($conn,"select * from tbl_user where email='$email' and password='$password'");
  $row=mysqli_fetch_assoc($sql);
  $count=mysqli_num_rows($sql);
  if($count>0)
  {
    echo "<script>alert('Login Success')</script>";
    $_SESSION['login']='yes';
    $_SESSION['email']=$email;
    $_SESSION['first_name']=$row['first_name'];
    $_SESSION['last_name']=$row['last_name'];
    $_SESSION['address']=$row['address'];
    $_SESSION['phone']=$row['phone'];
   ?>
   <script>
   window.location.href="<?php echo $site?>"
   </script>
   <?php

  }else{
    echo "<script>alert('Invalid Credentials')</script>";
     ?>
   <script>
   window.location.href="<?php echo $site?>login/";
   </script>
   <?php
  }
}


if(isset($_POST['forgot']))
{
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password1=$_POST['password1'];
        if($password==$password1){
          $sql=mysqli_query($conn,"select * from tbl_user where email='$email'");
          $count=mysqli_num_rows($sql);
          if($count>0)
          {
           $qwe=mysqli_query($conn,"Update tbl_user set `password`='$password' where email='$email'");
            if($qwe)
            {
              echo "<script>alert('Password updated successfully!')</script>"; 
              ?>
              <script type="text/javascript">
                window.location.href="<?php echo $site?>index.php";
              </script>
              <?php
            }else{
              echo "<script>alert('Some error Occured!')</script>";
              ?>
         <script>
          window.location.href="<?php echo $site?>forgot-password.php";
         </script>
         <?php 
            }
          }else{
           echo "<script>alert('Email is not in our records!')</script>"; 
           ?>
         <script>
          window.location.href="<?php echo $site?>forgot-password.php";
         </script>
         <?php
          }
        }else{
          echo "<script>alert('Passwords are not  matching!')</script>";
           ?>
         <script>
          window.location.href="<?php echo $site?>forgot-password.php";
         </script>
         <?php
        }

  ?>
   <script>
   window.location.href="<?php echo $site?>index.php";
   </script>
   <?php

}

?>
<script type="text/javascript">
              window.location.href="<?php echo $site?>";
   </script>