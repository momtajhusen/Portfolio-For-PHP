<?php
 
 require("database.php");
 session_start();

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
 // Header Details
    $header_img =  $_FILES["header-image"];
    $header_img_location = $header_img["tmp_name"];

    $header_img_mobile =  $_FILES["header-image-mobile"];
    $header_img_mobile_loca = $header_img_mobile["tmp_name"];

    $cv_name =  $_POST["cv_resume_name"];

    $cv_file =  $_FILES["cv_resume_file"];
    $cv_location = $cv_file["tmp_name"];


    $header_name = $_POST["header-name"];
    $i_am = $_POST["i-am"];

    $reaponse;
   
    

 // About Details
    $profile_img =  $_FILES["profile-img"];
     $profile_img_location = $profile_img["tmp_name"];

     $about_as = $_POST["about_as"]; 
     $you_are = $_POST["you_are"];
     $you_are_as = $_POST["you_are_as"];


     $Birthday = $_POST["Birthday"];
     $age = $_POST["age"];
     $Website = $_POST["Website"];
     $Degree = $_POST["Degree"];
     $Phone = $_POST["Phone"];
     $PhEmailone = $_POST["PhEmailone"];
     $City = $_POST["City"];
     $Freelance = $_POST["Freelance"];
     $Officiis_eligendi = $_POST["Officiis_eligendi"];

// Facts
      $Facts_btn = $_POST["facts-btn"];
    
     $Facts_as = $_POST["Facts_as"];

     $Happy_clients_no = $_POST["Happy_clients_no"];
     $Happy_clients_text = $_POST["Happy_clients_text"];

     $Projects_no = $_POST["Projects_no"];
     $Projects_text = $_POST["Projects_text"];

     $Hours_support_no = $_POST["Hours_support_no"];
     $Hours_support_text = $_POST["Hours_support_text"];

     $Hard_workers_no = $_POST["Hard_workers_no"];
     $Hard_workers_text = $_POST["Hard_workers_text"];

 // Skills
    $Skills_as = $_POST["Skills_as"];

    $skill_a = $_POST["skill_a"];
    $skill_ap = $_POST["skill_ap"];
    $skill_btn_a = $_POST["skill_btn_a"];
 
    $skill_b = $_POST["skill_b"];
    $skill_bp = $_POST["skill_bp"];
    $skill_btn_b = $_POST["skill_btn_b"];

    $skill_c = $_POST["skill_c"];
    $skill_cp = $_POST["skill_cp"];
    $skill_btn_c = $_POST["skill_btn_c"];

    $skill_d = $_POST["skill_d"];
    $skill_dp = $_POST["skill_dp"];
    $skill_btn_d = $_POST["skill_btn_d"];

    $skill_e = $_POST["skill_e"];
    $skill_ep = $_POST["skill_ep"];
    $skill_btn_e = $_POST["skill_btn_e"];

    $skill_f = $_POST["skill_f"];
    $skill_fp = $_POST["skill_fp"];
    $skill_btn_f = $_POST["skill_btn_f"];

    $skill_g = $_POST["skill_g"];
    $skill_gp = $_POST["skill_gp"];
    $skill_btn_g = $_POST["skill_btn_g"];

    $skill_h = $_POST["skill_h"];
    $skill_hp = $_POST["skill_hp"];
    $skill_btn_h = $_POST["skill_btn_h"];

    $skill_i = $_POST["skill_i"];
    $skill_ip = $_POST["skill_ip"];
    $skill_btn_i = $_POST["skill_btn_i"];

    $skill_j = $_POST["skill_j"];
    $skill_jp = $_POST["skill_jp"];
    $skill_btn_j = $_POST["skill_btn_j"];

   


   
  // Resume
   // $Resume_btn = $_POST["Resume-btn"];
  // Portfolio
   // $Portfolio_btn = $_POST["Portfolio-btn"];
  // Services
   // $Services_btn = $_POST["Services-btn"];
  // Testimonials
   // $Testimonials_btn = $_POST["Testimonials-btn"];

  // Contact
    //$Contact_btn = $_POST["Contact-btn"];

    $Contact_as = $_POST["contact_as"];

    $Location = $_POST["location"];
  
    $Contact_Email = $_POST["Email"];
  
    $Call = $_POST["Call"];

   // Social Media Url
   $a_select = $_POST["a_select"];
   $b_select = $_POST["b_select"];
   $c_select = $_POST["c_select"];
   $d_select = $_POST["d_select"];
   $e_select = $_POST["e_select"];

   $a_url = $_POST["a_url_input"];
   $b_url = $_POST["b_url_input"];
   $c_url = $_POST["c_url_input"];
   $d_url = $_POST["d_url_input"];
   $e_url = $_POST["e_url_input"];


 
  
  


    $header_img_upload_location ="assets/img/hero-bg.jpg";
    $profile_img_upload_location ="assets/img/profile-img.jpg";

    $CV_upload_location ="assets/img/resume-cv.pdf";

// Header Img desktop 
  if($header_img_location != ""){
      list($header_img_width, $header_img_height) = getimagesize($header_img_location);

      if($header_img_width == 1920 && $header_img_height == 1280){
         if(move_uploaded_file($header_img_location,"../../assets/img/hero-bg.jpg"))
         {
         $reaponse = "Header Update ";
         }
   
         else{
         $reaponse = "header img not updated ";
         }
   
      }
  }

    // Header Img Mobile 
    if($header_img_mobile_loca != ""){
      list($header_img_width_mob, $header_img_height_mob) = getimagesize($header_img_mobile_loca);
   
      if($header_img_width_mob == 719 && $header_img_height_mob == 1280){
         if(move_uploaded_file($header_img_mobile_loca,"../../assets/img/mobile.jpg"))
         {
         $reaponse = "Header Update ";
         }
   
         else{
         $reaponse = "header img not updated ";
         }
   
      }
   }

  if($profile_img_location != ""){
       list($profile_img_width, $profile_img_height) = getimagesize($profile_img_location);

   if($profile_img_width == 600 && $profile_img_height == 600){
      if(move_uploaded_file($profile_img_location,"../../assets/img/profile-img.jpg"))
      {
         $reaponse = "profile Update ";
      }

      else{
         $reaponse = "profile img not updated ";
      }
   }
  }



    $update_status = "UPDATE header SET img ='$header_img_upload_location', name='$header_name' ";

    if($db->query($update_status) == true)
    {
       $reaponse = "Header Name Update Success ";
    }

    else{
            $reaponse = "Header Name Not Update ";
         }

   


   $i_am_update = "UPDATE header SET i_am ='$i_am'";

   if($db->query($i_am_update) == true)
   {
      $reaponse = "am i Update Success ";
   }

   else{
            $reaponse = "am i Not Update ";
         }



         $resume_status = "UPDATE resume_upload SET cv_type ='$cv_name', cv_path ='$CV_upload_location' ";

         if($db->query($resume_status) == true)
         {
            if(move_uploaded_file($cv_location,"../../assets/img/resume-cv.pdf"))
            {
               $reaponse = "profile Update ";
            }
      
            else{
               $reaponse = "profile img not updated ";
            }
         }
 


// About Update 
$about_status = "UPDATE about SET img ='$profile_img_upload_location', About_as='$about_as', you_are='$you_are', you_are_as='$you_are_as', Birthday='$Birthday', Age='$age', Website='$Website', Degree='$Degree', Phone='$Phone', PhEmailone='$PhEmailone', City='$City', Freelance='$Freelance', Officiis_eligendi='$Officiis_eligendi'";

if($db->query($about_status) == true)
{
   $reaponse = "about update Success ";

}
 
// Facts Update
$Facts_As = "UPDATE facts SET Facts_As ='$Facts_as'";
if($db->query($Facts_As) == true)
{
   $reaponse = "Facts_As Update ";

}

$Happy_clients = "UPDATE facts SET happy_clients_no ='$Happy_clients_no'";
if($db->query($Happy_clients) == true)
{
   $reaponse = "Happy clients Update ";

}

$Happy_clients_text = "UPDATE facts SET happy_clients_text ='$Happy_clients_text'";
if($db->query($Happy_clients_text) == true)
{
  $reaponse = "Happy clients text Update ";
}

$Projects_no = "UPDATE facts SET projects_no ='$Projects_no'";
if($db->query($Projects_no) == true)
{
   $reaponse = "Projects clients no ";

}

$Projects_text = "UPDATE facts SET projects_text ='$Projects_text'";
if($db->query($Projects_text) == true)
{
   $reaponse = "Projects clients no ";

}

$Hours_support = "UPDATE facts SET hours_support_no ='$Hours_support_no'";
if($db->query($Hours_support) == true)
{
   $reaponse = "Hours support Update ";

}

$Hours_support_text = "UPDATE facts SET hours_support_text ='$Hours_support_text'";
if($db->query($Hours_support_text) == true)
{
   $reaponse = "Hours support no Update ";

}

$Hard_workers = "UPDATE facts SET hard_workers_no ='$Hard_workers_no'";
if($db->query($Hard_workers) == true)
{
   $reaponse = "Hard workers Update ";

}

$Hard_workers_text = "UPDATE facts SET hard_workers_text ='$Hard_workers_text'";
if($db->query($Hard_workers_text) == true)
{
   $reaponse = "Hard workers text Update ";

}
 

if($Facts_btn != ""){

   $Facts_btn_status = "UPDATE facts SET on_off ='checked', display=''";
   if($db->query($Facts_btn_status) == true)
   {
      $reaponse = "about btn on ";
   
   }

}

else{

   $Facts_btn_status = "UPDATE facts SET on_off ='', display='d-none'";
   if($db->query($Facts_btn_status) == true)
   {
      $reaponse = "about btn off ";
   
   }

}

// Skill Update
$Skill_As = "UPDATE skills SET skill_as='$Skills_as', skill_a='$skill_a', skill_b='$skill_b', skill_c='$skill_c', skill_d='$skill_d', skill_e='$skill_e', skill_f='$skill_f', skill_g='$skill_g', skill_h='$skill_h', skill_i='$skill_i', skill_j='$skill_j' WHERE 1";
if($db->query($Skill_As) == true)
{
   $reaponse = "Skill Update ";

}

$skill_pct = "UPDATE skills SET pct_a='$skill_ap', pct_b='$skill_bp', pct_c='$skill_cp', pct_d='$skill_dp', pct_e='$skill_ep', pct_f='$skill_fp', pct_g='$skill_gp', pct_h='$skill_hp', pct_i='$skill_ip', pct_j='$skill_jp'";
if($db->query($skill_pct) == true)
{
   $reaponse = "pct Update ";

}

if($skill_btn_a != ""){

   $skill_btn_a_status = "UPDATE skills SET  btn_a ='checked', dispaly_a ='' ";
   if($db->query($skill_btn_a_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_a_status = "UPDATE skills SET  btn_a ='', dispaly_a ='d-none' ";
   if($db->query($skill_btn_a_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_b != ""){

   $skill_btn_b_status = "UPDATE skills SET  btn_b ='checked', dispaly_b ='' ";
   if($db->query($skill_btn_b_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_b_status = "UPDATE skills SET  btn_b ='', dispaly_b ='d-none' ";
   if($db->query($skill_btn_b_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_c != ""){

   $skill_btn_c_status = "UPDATE skills SET  btn_c ='checked', dispaly_c ='' ";
   if($db->query($skill_btn_c_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_c_status = "UPDATE skills SET  btn_c ='', dispaly_c ='d-none' ";
   if($db->query($skill_btn_c_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_d != ""){

   $skill_btn_d_status = "UPDATE skills SET  btn_d ='checked', dispaly_d ='' ";
   if($db->query($skill_btn_d_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_d_status = "UPDATE skills SET  btn_d ='', dispaly_d ='d-none' ";
   if($db->query($skill_btn_d_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_e != ""){

   $skill_btn_e_status = "UPDATE skills SET  btn_e ='checked', dispaly_e ='' ";
   if($db->query($skill_btn_e_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_e_status = "UPDATE skills SET  btn_e ='', dispaly_e ='d-none' ";
   if($db->query($skill_btn_e_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_f != ""){

   $skill_btn_f_status = "UPDATE skills SET  btn_f ='checked', dispaly_f ='' ";
   if($db->query($skill_btn_f_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_f_status = "UPDATE skills SET  btn_f ='', dispaly_f ='d-none' ";
   if($db->query($skill_btn_f_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_g != ""){

   $skill_btn_g_status = "UPDATE skills SET  btn_g ='checked', dispaly_g ='' ";
   if($db->query($skill_btn_g_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_g_status = "UPDATE skills SET  btn_g ='', dispaly_g ='d-none' ";
   if($db->query($skill_btn_g_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_h != ""){

   $skill_btn_h_status = "UPDATE skills SET  btn_h ='checked', dispaly_h ='' ";
   if($db->query($skill_btn_h_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_h_status = "UPDATE skills SET  btn_h ='', dispaly_h ='d-none' ";
   if($db->query($skill_btn_h_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_i != ""){

   $skill_btn_i_status = "UPDATE skills SET  btn_i ='checked', dispaly_i ='' ";
   if($db->query($skill_btn_i_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_i_status = "UPDATE skills SET  btn_i ='', dispaly_i ='d-none' ";
   if($db->query($skill_btn_i_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}

if($skill_btn_j != ""){

   $skill_btn_j_status = "UPDATE skills SET  btn_j ='checked', dispaly_j ='' ";
   if($db->query($skill_btn_j_status) == true)
   {
      $reaponse = "skill btn on ";
   
   }
}

else{
   $skill_btn_j_status = "UPDATE skills SET  btn_j ='', dispaly_j ='d-none' ";
   if($db->query($skill_btn_j_status) == true)
   {
      $reaponse = "skill btn on ";
   
   } 
}



/* Resume Update
if($Resume_btn != ""){

   $Resume_btn_status = "UPDATE resume SET on_off='checked', display=''";
   if($db->query($Resume_btn_status) == true)
   {
      $reaponse = "Resume btn on ";
   }

}

else{

   $Resume_btn_status = "UPDATE resume SET on_off ='', display='d-none'";
   if($db->query($Resume_btn_status) == true)
   {
      $reaponse = "Resume btn off ";
   }

}


// Portfolio Update
if($Portfolio_btn != ""){
   $Portfolio_btn_status = "UPDATE portfolio SET on_off='checked', display=''";
   if($db->query($Portfolio_btn_status) == true)
   {
      $reaponse = "Portfolio btn on ";
   }
}

else{
   $Portfolio_btn_status = "UPDATE portfolio SET on_off ='', display='d-none'";
   if($db->query($Portfolio_btn_status) == true)
   {
      $reaponse = "Portfolio btn off ";
   }
}

// Services Update
if($Services_btn != ""){
   $Services_btn_status = "UPDATE Services SET on_off='checked', display=''";
   if($db->query($Services_btn_status) == true)
   {
      $reaponse = "Services btn on ";
   }
}

else{
   $Services_btn_status = "UPDATE Services SET on_off ='', display='d-none'";
   if($db->query($Services_btn_status) == true)
   {
      $reaponse = "Services btn off ";
   }
}

// Testimonials Update
if($Testimonials_btn != ""){
   $Testimonials_btn_status = "UPDATE testimonials SET on_off='checked', display=''";
   if($db->query($Testimonials_btn_status) == true)
   {
      $reaponse = "Testimonials btn on ";
   }
}

else{
   $Testimonials_btn_status = "UPDATE testimonials SET on_off ='', display='d-none'";
   if($db->query($Testimonials_btn_status) == true)
   {
      $reaponse = "Testimonials btn off ";
   }
}

*/

// Contact Update
 $Contact_As = "UPDATE contact SET contact_as ='$Contact_as'";
   if($db->query($Contact_As) == true)
   {
      $reaponse = "Contact_As Update ";

   }

   $location = "UPDATE contact SET location ='$Location'";
   if($db->query($location) == true)
   {
      $reaponse = "location Update ";

   }

   $Contact_Email = "UPDATE contact SET Email ='$Contact_Email'";
   if($db->query($Contact_Email) == true)
   {
      $reaponse = "Email Update ";

   }

   $Call = "UPDATE contact SET Call_No ='$Call'";
   if($db->query($Call) == true)
   {
      $reaponse = "Call Update ";

   }

/*if($Contact_btn != ""){
   $Contact_btn_status = "UPDATE contact SET on_off='checked', display=''";
   if($db->query($Contact_btn_status) == true)
   {
      $reaponse = "Contact btn on ";
   }
}

else{
   $Contact_btn_status = "UPDATE contact SET on_off ='', display='d-none'";
   if($db->query($Contact_btn_status) == true)
   {
      $reaponse = "Contact btn off ";
   }
}  */


// Social Media
$Select_a = "UPDATE social_media SET select_a ='$a_select'";
if($db->query($Select_a) == true)
{
   $url_a = "UPDATE social_media SET url_a ='$a_url'";
   if($db->query($url_a) == true)
   {      
     $reaponse = "Select url Update";
   }  

}

$Select_b = "UPDATE social_media SET select_b ='$b_select'";
if($db->query($Select_b) == true)
{
   $url_b = "UPDATE social_media SET url_b ='$b_url'";
   if($db->query($url_b) == true)
   {      
     $reaponse = "Select url Update";
   }  

}

$Select_c = "UPDATE social_media SET select_c ='$c_select'";
if($db->query($Select_c) == true)
{
   $url_c = "UPDATE social_media SET url_c ='$c_url'";
   if($db->query($url_c) == true)
   {      
     $reaponse = "Select url Update";
   }  

}

$Select_d = "UPDATE social_media SET select_d ='$d_select'";
if($db->query($Select_d) == true)
{
   $url_d = "UPDATE social_media SET url_d ='$d_url'";
   if($db->query($url_d) == true)
   {      
     $reaponse = "Select url Update";
   }  

}

$Select_e = "UPDATE social_media SET select_e ='$e_select'";
if($db->query($Select_e) == true)
{
   $url_e = "UPDATE social_media SET url_e ='$e_url'";
   if($db->query($url_e) == true)
   {      
     $reaponse = "Select url Update";
   }  

}

$checked_a = "UPDATE social_media SET checked_a ='yes'";
   if($db->query($checked_a) == true)
   {      
     $reaponse = "success";
   }  
 } 

 echo $reaponse;
  
?>